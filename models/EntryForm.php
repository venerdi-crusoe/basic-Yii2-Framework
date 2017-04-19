<?php
	namespace app\models;

	use Yii;
	use yii\base\Model;

	class EntryForm extends Model {

		public $name;
		public $email;

		public function rules(){
				return [
						// name, email are required
						[['name', 'email',], 'required'],
						// email has to be a valid email address
						['email', 'email'],
				];
		}

	}

?>
