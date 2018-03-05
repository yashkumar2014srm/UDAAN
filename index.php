<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

        <?php
        
        
           
        $conn=new mysqli('localhost','root','root','LMS');
        $sql="select bname from bookdetails where bname='$bookname' ";
        $result=mysqli_query($conn,$sql);
        $row=mysqli_fetch_array($result);
        
        
      
        ?>

