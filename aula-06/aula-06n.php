<?php

trait Video {
  public function tag() {
    echo 'video';
  }
}

trait Audio {
  public function tag() {
    echo 'audio';
  }
}

class Media {
  use Audio, Video {
    Video::tag insteadof Audio;
  } //sem esta resolução ocorrerá um Fatal Error.
}

$media = new Media();
echo $media->tag(); //resultado: <video>
