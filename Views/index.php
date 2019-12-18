                                                                                      
  <div class="table-responsive">          
  <table class="table">
    <thead>
    <a href="/demo/Home/create_user_page/" class="btn btn-primary btn-xs pull-right"><b>+</b> Add new Users</a>
      <tr>  <th>Id</th>
            <th>User Name</th>
        </tr>
    </thead>
    <tbody>

    <?php
       // var_dump($user);
    
        foreach ($user as $singleUser)
        {
            echo '<tr>';
            echo "<td>" . $singleUser['id'] . "</td>";
            echo "<td>" . $singleUser['userName'] . "</td>";
            echo "</tr>";
        }

        ?>
     </tbody>
  </table>
  </div>


