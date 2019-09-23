<?php

  //Step 1. Create Connection
  
  $koneksi_db = new mysqli("localhost", "root", "", "ersystem", "3306");
  
  if($koneksi_db->connect_error) {
    die('Connect Error: ' . $koneksi_db->connect_error);
  }
  //echo "Koneksi berhasil....";
  
  echo '<h1><center>FIK Student Dashboard</center></h1>';
    //Jumlah mahasiswa by Prodi
    $get_all_gender = "SELECT LEFT(stu_curriculum_code, 2) AS Prodi, COUNT(stu_nim) AS Total FROM students GROUP BY LEFT(stu_curriculum_code, 2)";

    $result = $koneksi_db->query($get_all_gender);

    echo '<table = border = "1">';
    echo '<tr><th colspan="2">Student by Prodi</th> </tr>';
    $no = 1;

    while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
        echo '<tr>';
        echo '<td>'. $row['Prodi'] . '</td>';
        echo '<td>'. $row['Total'] . '</td>';
        echo '</tr>';
    
        $no++;
    }
    echo '</table>';
    $result->free();
    
    echo '<hr>';

    //Jumlah mahasiswa by Prodi & Gender
    $get_all_gender_by_prodi = "SELECT LEFT(stu_curriculum_code, 2) AS Prodi, stu_gender AS Gender,COUNT(stu_nim) AS Total FROM students GROUP BY LEFT(stu_curriculum_code, 2), stu_gender";
    $result = $koneksi_db->query($get_all_gender_by_prodi);

    echo '<table = border = "1">';
    echo '<tr><th colspan="3">Student by Gender (Per Prodi)</th> </tr>';
    $no = 1;

    while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
        echo '<tr>';
        echo '<td>'. $row['Prodi'] . '</td>';
        echo '<td>'. $row['Gender'] . '</td>';
        echo '<td>'. $row['Total'] . '</td>';
        echo '</tr>';
    
        $no++;
    }
    echo '</table>';
    $result->free();

    echo '<hr>';

    //Jumlah mahasiswa by Prodi & Religion
    $get_all_gender_by_religion = "SELECT LEFT(stu_curriculum_code, 2) AS Prodi, stu_religion_id AS Religion, COUNT(stu_nim) AS Total FROM students GROUP BY LEFT(stu_curriculum_code, 2), Religion";
    $result = $koneksi_db->query($get_all_gender_by_religion);

    echo '<table = border = "1">';
    echo '<tr><th colspan="3">Student by Religion (Per Prodi)</th> </tr>';
    $no = 1;

    while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
        echo '<tr>';
        echo '<td>'. $row['Prodi'] . '</td>';
        echo '<td>'. $row['Religion'] . '</td>';
        echo '<td>'. $row['Total'] . '</td>';
        echo '</tr>';
    
        $no++;
    }
    echo '</table>';
    $result->free();

    echo '<hr>';

    //Jumlah mahasiswa by Prodi & Residence
    $get_all_gender_by_residence = "SELECT LEFT(stu_curriculum_code, 2) AS Prodi, stu_residence_id AS Residence, COUNT(stu_nim) AS Total FROM students GROUP BY LEFT(stu_curriculum_code, 2), Residence";
    $result = $koneksi_db->query($get_all_gender_by_residence);

    echo '<table = border = "1">';
    echo '<tr><th colspan="3">Student by Residence (Per Prodi)</th> </tr>';
    $no = 1;

    while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
        echo '<tr>';
        echo '<td>'. $row['Prodi'] . '</td>';
        echo '<td>'. $row['Residence'] . '</td>';
        echo '<td>'. $row['Total'] . '</td>';
        echo '</tr>';
    
        $no++;
    }
    echo '</table>';
    $result->free();

    echo '<hr>';

    //Jumlah mahasiswa by Prodi & Curriculum
    $get_all_gender_by_curriculum = "SELECT LEFT(stu_curriculum_code, 2) AS Prodi, stu_curriculum_code AS Curriculum, COUNT(stu_nim) AS Total FROM students GROUP BY LEFT(stu_curriculum_code, 2), Curriculum";
    $result = $koneksi_db->query($get_all_gender_by_curriculum);

    echo '<table = border = "1">';
    echo '<tr><th colspan="3">Student by Curriculum (Per Prodi)</th> </tr>';
    $no = 1;

    while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
        echo '<tr>';
        echo '<td>'. $row['Prodi'] . '</td>';
        echo '<td>'. $row['Curriculum'] . '</td>';
        echo '<td>'. $row['Total'] . '</td>';
        echo '</tr>';
    
        $no++;
    }
    echo '</table>';
    $result->free();

    echo '<hr>';
    
    //Jumlah mahasiswa by Prodi & Year
    $get_all_gender_by_angkatan = "SELECT LEFT(stu_curriculum_code, 2) AS Prodi, SUBSTRING(stu_curriculum_code, 4, 4) AS Year, COUNT(stu_nim) AS Total FROM students GROUP BY LEFT(stu_curriculum_code, 2), Year";
    $result = $koneksi_db->query($get_all_gender_by_angkatan);

    echo '<table = border = "1">';
    echo '<tr><th colspan="3">Student by Year (Per Prodi)</th> </tr>';
    $no = 1;

    while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
        echo '<tr>';
        echo '<td>'. $row['Prodi'] . '</td>';
        echo '<td>'. $row['Year'] . '</td>';
        echo '<td>'. $row['Total'] . '</td>';
        echo '</tr>';
    
        $no++;
    }
    echo '</table>';
    $result->free();

    //step 4. Free connection
    $koneksi_db->close();
?>
