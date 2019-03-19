
<?php
  if(isset($inscErrorText))
  echo '<span class="error">' . $inscErrorText . '</span>';
?>
<form action="index.php" method="post" class="cadre">
  <h3 style="margin-bottom:40px; color:#DCDCDC">CONNECTION</h3>
  <table>
    <tr>
      <th>Login* :</th>
      <td><input type="text" name="inscLogin"/></td>
    </tr>
    <tr>
      <th>Mot de passe* :</th>
      <td><input type="password" name="inscPassword"/></td>
    </tr>
    <tr>
    <th />
      <td><input class="bouton" type="submit" value="Se connecter..." /></td>
    </tr>
  </table>
</form>
