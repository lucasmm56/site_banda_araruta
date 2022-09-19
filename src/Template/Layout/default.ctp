<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('style') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <nav>
        <input type="checkbox" name="open" id="open">
        <label for="open" class="open">
            <i class="fas fa-bars"></i>
        </label>
        <div class="menu">
            <div class="logo">
                <a href="#">
                <?=$this->Html->image('ararutalogo.jpg')?>
                </a>
            </div>
          <ul>
              <li>
                  <a href="http://localhost/araruta/home">
                      <span><i class="fas fa-home"></i></span>
                      Home
                  </a>
              </li>
              <li>
                  <a href="http://localhost/araruta/biographies">
                      <span><i class="fas fa-address-card"></i></span>
                      Biografia
                  </a>
              </li>
              <li>
                  <a href="http://localhost/araruta/pictures">
                      <span><i class="fas fa-image"></i></span>
                      Fotos
                  </a>
              </li>
              <li>
                  <a href="http://localhost/araruta/videos">
                      <span><i class="fas fa-video"></i></span>
                      Vídeos
                  </a>
              </li>
              <li>
                  <a href="#">
                      <span><i class="fas fa-music"></i></span>
                      Músicas
                  </a>
              </li>
              <li>
                  <a href="#">
                      <span><i class="fas fa-calendar-check"></i></span>
                      Eventos
                  </a>
              </li>
              <li>
                  <a href="#">
                      <span><i class="fas fa-plus-circle"></i></span>
                      Lançamentos
                  </a>
              </li>
              <li>
                  <a href="#">
                      <span><i class="fas fa-address-book"></i></span>
                      Contato
                  </a>
              </li>
              <li>
                  <a href="#">
                      <span><i class="fas fa-comments-alt-dollar"></i></span>
                      Feedback
                  </a>
              </li>
          </ul>
        </div>
    </nav>
</body>
</html>
    <?= $this->Flash->render() ?>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
    <footer>
    </footer>
</body>
</html>
