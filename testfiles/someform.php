<form action="testfiles/form.php" method="GET" style=" border:1px solid #000; padding: 20px;">    <!--action="save-form-data.php" method="POST"-->
<div class="form-group">
    <label for="formGroupExampleInput">Login name</label>
    <input name="user" type="text" class="form-control" id="formGroupExampleInput" value="Pupkin" placeholder="Login">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input name="password" type="password" class="form-control" id="exampleInputPassword1" value="10kn" placeholder="Password">
  </div>
  <div class="form-group form-check">
    <input type="hidden" name="hello" value="0">
    <input type="checkbox" name="hello" value="1" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Example textarea</label>
    <textarea name="textarea" class="form-control" id="exampleFormControlTextarea1" rows="3">Заполните поле</textarea>
  </div>
  <button name="send" type="submit" class="btn btn-primary" value="отправить">Submit</button>
</form>