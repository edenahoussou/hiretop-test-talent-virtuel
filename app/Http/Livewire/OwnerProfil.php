<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Mail\SendOtpMail;
use App\Mail\SendPasswordUpdatedMail;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class OwnerProfil extends Component
{
    public $otp, $name, $user, $email, $phone, $address, $dob, $photo, $tab = 'info' , $password, $password_confirmation;

    protected $listeners = ['profileUpdated' => '$refresh'];

    use WithFileUploads;

    public function mount()
    {
        $this->user = auth()->user();
    }

    public function edit()
    {
        $this->name = $this->user->name;
        $this->email = $this->user->email;
        $this->phone = $this->user->phone;
        $this->address = $this->user->address;
        $this->dob = $this->user->dob;
        $this->dispatchBrowserEvent('open-modal');
    }

    /**
     * Updates the user profile with the provided data.
     *
     * @throws \Throwable If an error occurs during the update process.
     */
    public function updateProfile()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|',
            'phone' => 'nullable|string|',
            'address' => 'required|string|max:255',
            'dob' => 'nullable|date',
            'photo' => 'nullable|file|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        try {

            $this->user->update([
                'name' => $this->name,
                'email' => $this->email,
                'phone' => $this->phone,
                'address' => $this->address,
                'dob' => $this->dob,
            ]);

            if ($this->photo) {
                $this->user->update([
                    'photo' => $this->photo->store('users', 'public'),
                ]);
            }

            $this->dispatchBrowserEvent('success-message', [
                'message' => 'Utilisateur mis a jour avec succes',
            ]);

            $this->emit('profileUpdated');

            $this->dispatchBrowserEvent('close-modal');
        } catch (\Throwable $th) {
            $this->dispatchBrowserEvent('error-message', [
                'message' => 'Une erreur s\'est produite ' . $th->getMessage(),
            ]);
        }
    }

    /**
     * Generate a random OTP, store it in the session, and send it to the user's email.
     *
     * @throws \Throwable If an error occurs while sending the OTP email.
     */
    public function generateRandomOtp()
    {
        // Generate a random 6-digit OTP
        $otp = rand(100000, 999999);

        // Store the OTP in the session with a 5-minute expiration
            session()->put('otp', $otp);
            session()->put('otp_expires_at', now()->addMinutes(5));

            // Send the OTP to the user's email
            try {
                Mail::to($this->user->email)->send(new SendOtpMail($otp));

                $this->dispatchBrowserEvent('success-message', [
                    'message' => 'Un code de validation a été envoyé a votre adresse email',
                ]);
            } catch (\Throwable $th) {
                $this->dispatchBrowserEvent('error-message', [
                    'message' => 'Une erreur s\'est produite ' . $th->getMessage(),
                ]);
            }
    }

    /**
     * Check the provided OTP against the stored OTP and verify its validity.
     *
     * @param string $userProvidedOtp The OTP provided by the user.
     * @return string The result of the OTP verification.
     */
    private function checkotp($userProvidedOtp)
    {
        $maxAttempts = 30;

        // Check if the user has exceeded the maximum number of attempts
        if (session()->has('otp_attempts') && session()->get('otp_attempts') >= $maxAttempts) {
            // Reset OTP attempts
            session()->forget('otp_attempts');
            return 'Maximum attempts exceeded. Please request a new OTP.';
        }

        // Check if an OTP is already stored in the session
        if (session()->has('otp')) {
            $otp = session()->get('otp');
            $otpExpiresAt = session()->get('otp_expires_at');


            // Check if the OTP has expired
            if (now() > $otpExpiresAt) {
                //dd($otpExpiresAt, now());

                // Regenerate a new OTP
                $this->generateRandomOtp();
                session()->put('otp_attempts', session()->get('otp_attempts', 0) + 1);
                return 'OTP expired. A new OTP has been sent to your email.';
            }

            // Check if the provided OTP matches the stored OTP
            if ($userProvidedOtp == $otp) {
                // OTP is correct
                return 'OTP verification successful!';
            } else {
                // Incorrect OTP
                session()->put('otp_attempts', session()->get('otp_attempts', 0) + 1);
                return 'Incorrect OTP. Please try again.';
            }
        } else {
            return 'No OTP generated. Please request a new OTP.';
        }
    }

    public function changePassword()
    {
        $this->dispatchBrowserEvent('open-password-modal');
 
    }

    public function cancelUpdatePasword()
    {
        $this->reset(['password', 'otp']);
    }

    /**
     * Updates the user's password if the OTP verification is successful.
     *
     * @return void
     */
    public function updatePassword()
    {
        $result = $this->checkotp($this->otp);
        //dd($result);
        if ($result === 'OTP verification successful!') {
            //dd($this->password);
            $this->validate([
                'password' => 'required|string|min:8|confirmed',
            ]);
            // dd($this->password);
            $this->user->update(['password' => Hash::make($this->password)]);
            $this->reset(['password', 'otp']);
            $this->dispatchBrowserEvent('success-message', ['message' => 'Mot de passe mis a jour avec succes']);
            $this->dispatchBrowserEvent('close-password-modal');

            Mail::to($this->user->email)->send(new SendPasswordUpdatedMail($this->user->name));
        }

        $messages = match (true === $result) {
            'OTP expired. A new OTP has been sent to your email' => ['message' => 'OTP expiré. Un nouveau OTP a été envoyé a votre adresse email'],
            'Incorrect OTP. Please try again' => ['message' => 'OTP incorrect. Veuillez reessayer'],
            'Maximum attempts exceeded. Please request a new OTP.' => ['message' => 'Vous avez dépassé le nombre maximum d\'essais. Veuillez demander un nouveau OTP un peu plus tard'],
            default => null,
        };

        if ($messages) {
            $this->dispatchBrowserEvent('error-message', $messages);
        }

        if ($result === 'Maximum attempts exceeded. Please request a new OTP.') {
            $this->dispatchBrowserEvent('close-password-modal');
        }

        //$this->generateRandomOtp();
    }

    /**
     * Switches the active tab to the specified tab.
     *
     * @param mixed $tab The tab to switch to.
     * @return void
     */
    public function switchTo($tab)
    {
        $this->tab = $tab;
    }

    /**
     * Toggles the two-factor authentication for the user.
     *
     * This function checks the current state of two-factor authentication for the user. If it's currently enabled,
     * it disables it by updating the 'two_factor' field in the user's record to 'disabled'. It then dispatches
     * a browser event with a success message indicating that the two-factor authentication has been successfully disabled.
     * If two-factor authentication is currently disabled, it enables it by updating the 'two_factor' field to 'enabled'.
     * It then dispatches a browser event with a success message indicating that the two-factor authentication has been successfully enabled.
     *
     * @return void
     */
    public function toogle2fa()
    {
        if ($this->user->two_factor == 'enabled') {
            $this->user->update([
                'two_factor' => 'disabled',
            ]);

            $this->dispatchBrowserEvent('success-message', [
                'message' => '2FA désactivé avec succès',
            ]);
        } else {
            $this->user->update([
                'two_factor' => 'enabled',
            ]);

            $this->dispatchBrowserEvent('success-message', [
                'message' => '2FA activé avec succès',
            ]);
        }
    }

    /**
     * Toggles the activity logs for the user.
     *
     * This function checks the current state of the activity logs for the user. If they are currently enabled,
     * it disables them by updating the 'activity_logs' field in the user's record to 'disabled'. It then dispatches
     * a browser event with a success message indicating that the activity logs have been successfully disabled.
     * If the activity logs are currently disabled, it enables them by updating the 'activity_logs' field to 'enabled'.
     * It then dispatches a browser event with a success message indicating that the activity logs have been successfully enabled.
     *
     * @return void
     */
    public function toogleActivityLogs()
    {
        if ($this->user->activity_logs == 'enabled') {
            $this->user->update([
                'activity_logs' => 'disabled',
            ]);

            $this->dispatchBrowserEvent('success-message', [
                'message' => 'Journal d\'activité désactivés avec succès',
            ]);
        } else {
            $this->user->update([
                'activity_logs' => 'enabled',
            ]);

            $this->dispatchBrowserEvent('success-message', [
                'message' => 'Journal d\'activité activés avec succès',
            ]);
        }
    }

    public function render()
    {
        $title = __('Profil Utilisateur');
        $enable2fa = $this->user->two_factor;

        return view('livewire.owner-profil', compact('enable2fa'))->extends('layouts.admin-master', compact('title'))->section('content');;
    }
}
