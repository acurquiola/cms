<?php namespace TopSportsTv\Subscriptions\Components;

use Cms\Classes\ComponentBase;

use TopSportsTv\Subscriptions\Models\Subscription;

class Subscription extends ComponentBase
{
    public function componentDetails(){
        return[
            'name' => 'Registro de Pagos',
            'description' => 'Formulario de registro de pagos'
        ]; 
    }

    protected function registerPagos(){

        try {
            /*
             * Validate input
             */
            $data = post();

            $rules = [
                'metodo_pago'      => 'required',
                'nro_referencia'   => 'required',
                'monto'            => 'required',
                'subscriptions_id' => 'required',
                'fecha_pago'       => 'required',
            ];

            $validation = Validator::make($data, $rules);
            if ($validation->fails()) {
                throw new ValidationException($validation);
            }

            /*
             * Registro de Pago
             */
            
            $user = Auth::register($data, $automaticActivation);

            /*
             * Activation is by the user, send the email
             */
            if ($userActivation) {
                $this->sendActivationEmail($user);

                Flash::success(Lang::get('rainlab.user::lang.account.activation_email_sent'));
            }

            /*
             * Automatically activated or not required, log the user in
             */
            if ($automaticActivation || !$requireActivation) {
                Auth::login($user);
            }

            /*
             * Redirect to the intended page after successful sign in
             */
            $redirectUrl = $this->pageUrl($this->property('redirect'))
                ?: $this->property('redirect');

            if ($redirectUrl = post('redirect', $redirectUrl)) {
                return Redirect::intended($redirectUrl);
            }

        }
        catch (Exception $ex) {
            if (Request::ajax()) throw $ex;
            else Flash::error($ex->getMessage());
        }
    }
}