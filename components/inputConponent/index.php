<?php
function input_component(
  $name,
  $type,
  $placeholder,
  $required,
  $id
) {
  $input = "<input type='$type' name='$name' required='$required' class='validate'>";
  $label = "<label for='$id'>$placeholder</label>";
  echo  "<div class='input-field'>$input$label</div>";
}
