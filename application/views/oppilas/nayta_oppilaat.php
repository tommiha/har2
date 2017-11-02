<h1>Opiskelijat</h1>
<table border="1">
  <tr>
    <th>Etunimi</th><th>Sukunimi</th><th>Syntymävuosi</th><th>Poista</th></tr>
      <?php
        foreach ($oppilaat as $r) {
          echo '<tr>';
          echo '<td>'.$r['etunimi'].'</td>';
          echo '<td>'.$r['sukunimi'].'</td>';
          echo '<td>'.$r['syntymavuosi'].'</td>';
          echo '<td><a href="'.site_url('oppilas/poista_oppilas').'/'.$r['idOpiskelija'].'">Poista</a></td>';
          echo '</tr>';
        }
     ?>
</table>
