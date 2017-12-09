<?php

$pageTitle = "Suggest a media item";

 include("inc/header.php"); ?>

<div class="section page">
  <div class="wrapper">
  <h1><?php echo $pageTitle; ?></h1>
  <p>If you think there is something I&rsquo;m missing, let me know! Complete the form
    to send me an email</p>
    <form method="post" action="process.php">
      <table>
        <tr>
          <th>
            <lable for="name">Name</lable>
          </th>
          <td>
            <input type="text" id="name" name="name" />
          </td>
        </tr>
          <tr>
            <th>
              <lable for="email">Email</lable>
            </th>
            <td>
              <input type="text" id="email" name="email" />
            </td>
          </tr>
          <tr>
            <th>
              <lable for="details">Suggest Item Details</lable>
            </th>
            <td>
              <textarea id="details" name="details" />
            </textarea>
            </td>
          </tr>
      </table>
      <input type="submit" value="send" />
    </form>
 </div>
</div>
