<?php  include "common.php"  ?>


    
        <form class="container">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Name">
            </div>
            <div class="form-group">
                <label for="name">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter Your Email">
            </div>
            <div class="form-group">
                <label for="name">Phome</label>
                <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter Your Phone Number">
            </div>
            <div class="form-group">
                <div class="form-group">
                    <label for="desc">How May We Help You ?</label>
                    <textarea class="form-control" id="desc" name="desc" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </form>
   
        </body>

</html>