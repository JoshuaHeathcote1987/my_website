<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">email</th>
      <th scope="col">password</th>
      <th scope="col">access</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($query->result() as $row) { ?>
    <tr>
      <th scope="row">1</th>
      <td><?php echo $row->email ?></td>
      <td><?php echo $row->password ?></td>
      <td><?php echo $row->email ?></td>
    </tr>

  </tbody>
</table>
    <?php  } ?>   



