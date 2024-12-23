<?php
class Control {
    private $background;
    private $width;
    private $height;

    public function getBackground() {
        return $this->background;
    }

    public function setBackground($background) {
        $this->background = $background;
    }

    public function getWidth() {
        return $this->width;
    }

    public function setWidth($width) {
        $this->width = $width;
    }

    public function getHeight() {
        return $this->height;
    }

    public function setHeight($height) {
        $this->height = $height;
    }
}

class Input extends Control {
    private $name;
    private $value;

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getValue() {
        return $this->value;
    }

    public function setValue($value) {
        $this->value = $value;
    }
}

class Button extends Input {
    private $isSubmit;

    public function getSubmitState() {
        return $this->isSubmit;
    }

    public function setSubmitState($isSubmit) {
        $this->isSubmit = $isSubmit;
    }

    public function __construct($background, $width, $height, $name, $value, $isSubmit) {
        $this->setBackground($background);
        $this->setWidth($width);
        $this->setHeight($height);
        $this->setName($name);
        $this->setValue($value);
        $this->setSubmitState($isSubmit);
    }
}

class Text extends Input {
    private $placeholder;

    public function getPlaceholder() {
        return $this->placeholder;
    }

    public function setPlaceholder($placeholder) {
        $this->placeholder = $placeholder;
    }

    public function __construct($background, $width, $height, $name, $value, $placeholder) {
        $this->setBackground($background);
        $this->setWidth($width);
        $this->setHeight($height);
        $this->setName($name);
        $this->setValue($value);
        $this->setPlaceholder($placeholder);
    }
}

class Label extends Control {
    private $for;

    public function getParentName() {
        return $this->for;
    }

    public function setParentName($object) {
        $this->for = $object->getName();
    }

    public function __construct($background, $width, $height, $name, $value, $forObject) {
        $this->setBackground($background);
        $this->setWidth($width);
        $this->setHeight($height);
        $this->setName($name);
        $this->setValue($value);
        $this->setParentName($forObject);
    }
}

function convertToHTML($control) {
    if ($control instanceof Button) {
        return "<button style='background: {$control->getBackground()}; width: {$control->getWidth()}px; height: {$control->getHeight()}px;' name='{$control->getName()}' value='{$control->getValue()}' type='" . ($control->getSubmitState() ? 'submit' : 'button') . "'>{$control->getValue()}</button>";
    }

    if ($control instanceof Text) {
        return "<input type='text' style='background: {$control->getBackground()}; width: {$control->getWidth()}px; height: {$control->getHeight()}px;' name='{$control->getName()}' value='{$control->getValue()}' placeholder='{$control->getPlaceholder()}' />";
    }

    if ($control instanceof Label) {
        return "<label for='{$control->getParentName()}' style='background: {$control->getBackground()}; width: {$control->getWidth()}px; height: {$control->getHeight()}px;'>{$control->getValue()}</label>";
    }

    return "";
}

$button = new Button("red", 200, 50, "submitBtn", "Submit", true);
$text = new Text("white", 300, 40, "username", "", "Enter your name");
$label = new Label("gray", 150, 40, "label1", "Username", $text);

echo convertToHTML($button);
echo "<br>";
echo convertToHTML($text);
echo "<br>";
echo convertToHTML($label);
?>