<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Search</title>
    <link rel="stylesheet" href="hfile.css">
  </head>
  <body>
    <!-- upperpart ends-->
    <div class="Sign-UpBox">
      <img src="img/p.png" class="user">
      <h2>Fined Your Lawyer</h2>
        <div class="submit-status"></div>

    <form class="" action="" method="post">
  <input type="hidden" name="token" value="">

  <select name="district_id" class="form-control selectpicker " data-live-search="true" style="margin-bottom: 10px;" required="required">

      <option value="">Select District</option>
      <option value="1">Dhaka ঢাকা </option>
      <option value="2">Faridpur ফরিদপুর </option>
      <option value="3">Gazipur গাজীপুর </option>
      <option value="4">Jamalpur জামালপুর </option>
      <option value="5">Kishoreganj কিশোরগঞ্জ </option>
      <option value="6">Mymensingh ময়মনসিংহ </option>

      </select>

      <select name="case_category" class="form-control selectpicker " data-live-search="true" style="margin-bottom: 10px;">

     <option value="0">Select Case Category</option>
     <option value="1">নারী ও শিশু আইন </option>
     <option value="2">আইসিটি আইন </option>
     <option value="3">বাল্য বিবাহ </option>
     <option value="4">যৌতুক </option>
     <option value="5">ইভটিজিং </option>

    </select>

    <input type="text" name="lawyerName" placeholder="Search By Name"> <input class="btn btn-primary" type="submit" value="Search">
    <a href="index.php">Back to home</a>
                            </form>
                            </div>
  </body>
</html>
