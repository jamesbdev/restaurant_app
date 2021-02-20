<header>
<h1>Food delivery App</h1>
<div class="card text-center">
  <div class="card-header">
    <ul class="nav nav-tabs card-header-tabs">
     <?php 
       foreach ($main_menu as $menu_item) {
        
        ?> 
        <li class="nav-item">
        <a class="nav-link" href="<?php echo $menu_item[href]; ?>">
        <?php 
          echo $menu_item[name];
        ?>
      </a>
        </li>
<?php
      }
?>
     
     
    </ul>
  </div>
  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
    </header>