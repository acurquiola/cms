<?php namespace TopSportsTv\Subscriptions\Components;

use Cms\Classes\ComponentBase;
use Input;
use Validator;
use Auth;
use Redirect;
use TopSportsTv\Subscriptions\Models\Pago;
use RainLab\User\Models\User;
use Flash;

class PagosForm extends ComponentBase
{

	public function componentDetails(){
		return [
			'name' => 'Registro Pagos',
			'description' => 'Formulario de registro de pagos'
		];
	}

	public function onSave(){
		$pago                   = new Pago();
		$pago->metodo_pago      = Input::get('metodo_pago');
		$pago->nro_referencia   = Input::get('nro_referencia');
		$pago->monto            = Input::get('monto');
		$pago->subscriptions_id = Input::get('subscriptions_id');
		$pago->fecha_pago       = Input::get('fecha_pago');
		$pago->users_id         = Auth::getUser()->id;
		$pago->save();
      // Flash::success('¡Pago registrado exitósamente!');
		return Redirect::back();
	}

}