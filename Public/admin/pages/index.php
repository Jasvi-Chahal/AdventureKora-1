<?php require_once('../../../Private/initialize.php'); ?>

<?php
  $pages = [
    ['id' => '1', 'position' => '1', 'visible' => '1', 'menu_name' => 'Adventure Kora'],
    ['id' => '2', 'position' => '2', 'visible' => '1', 'menu_name' => 'Contact Us'],
    ['id' => '3', 'position' => '3', 'visible' => '1', 'menu_name' => 'About Us'],
    ['id' => '4', 'position' => '4', 'visible' => '1', 'menu_name' => 'History'],
  ];
?>

<?php $page_title = 'Pages'; ?>
<?php include(SHARED_PATH. '/admin_header.php'); ?>

<div id="content">
<div class="subjects listing">
    <h1>Pages</h1>

    <div class="actions">
      <a class="action" href="">Create New Pages</a>
</div>

<table class="list">
  	  <tr>
        <th>ID</th>
        <th>Position</th>
        <th>Visible</th>
  	    <th>Name</th>
  	    <th>&nbsp;</th>
  	    <th>&nbsp;</th>
        <th>&nbsp;</th>
  	  </tr>

      <?php foreach($pages as $page) { ?>
        <tr>
          <td><?php echo h($page['id']); ?></td>
          <td><?php echo h($page['position']); ?></td>
          <td><?php echo $page['visible'] == 1 ? 'true' : 'false'; ?></td>
          <td><?php echo h($page['menu_name']); ?></td>
          <td><a class="action" href="<?php echo url_for('/admin/pages/show.php?id=' . h(u($page['id']))); ?>">View</a></td>
          <td><a class="action" href="">Edit</a></td>
          <td><a class="action" href="">Delete</a></td>
        </tr>
      <?php } ?>
  	</table>

  </div>

</div>
<?php include(SHARED_PATH. '/admin_footer.php'); ?>
