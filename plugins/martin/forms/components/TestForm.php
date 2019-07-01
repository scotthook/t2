<?php

    namespace Martin\Forms\Components;

    use Martin\Forms\Classes\MagicForm;

    class TestForm extends MagicForm {
        public function componentDetails() {
            return [
                'name'        => 'martin.forms::lang.components.test_form.name',
                'description' => 'martin.forms::lang.components.test_form.description',
            ];
        }

    }

?>