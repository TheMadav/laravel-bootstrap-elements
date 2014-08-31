<?php
	if ($errors->has($field) ):
		echo "<div class='form-group has-error has-feedback'>";
	elseif ( Input::old($field) && ! $errors->has($field) ):
		echo "<div class='form-group has-success has-feedback'>";
	else:
		echo "<div class='form-group'>";
	endif;
?>
	{{ Form::label($field, trans($context.'.'.$field)) }}
	{{ Form::text($field, Input::old($field), array('class'=>'form-control', 'placeholder'=> trans($context.'.'.$field.'_placeholder')) ) }}
<?php
	if ($errors->has($field) ):
		echo '<span class="fa fa-exclamation-triangle form-control-feedback"></span>';
	elseif ( Input::old($field) && ! $errors->has($field) ):
		echo '<span class="fa fa-check-square form-control-feedback"></span>';
	endif;
?>
	@foreach($errors->get($field) as $message)
		<p class="help-block">{{ $message }}</p>
	@endforeach
</div>