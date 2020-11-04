<style>
  .footer{
    background-color: #182628;
    position:relative;
    width: 100%;
    left: 0;
    bottom: 0;
  }

  .footer-list {
    border: none; 
    background-color: #182628;
  }

  .footer-list a{
    color: white;
    font-weight: bold;
  }

  .footer-list a i{
    padding-right: 3px;
  }

</style>

<footer class="page-footer font-small cyan darken-3">
 
  <div class="row" style="margin: 0;">
      <div class="col-9" style="width: 60%;">

        <ul class="list-group list-group-horizontal">
          
          <li class="footer-list list-group-item ">
            <a data-toggle="modal" href="#termsAndConditions">FilmFinity© 2020</a>
          </li>

          <li class="footer-list list-group-item">
            <a data-toggle="modal" href="#aboutUs">About FilmFinity</a>
          </li>
          <li class="footer-list list-group-item">
            <a data-toggle="modal" href="#contacts">Contacts</a>
          </li>
          <li class="footer-list list-group-item">
            <a data-toggle="modal" href="#faq">FAQ</a>
          </li>
        </ul>

      </div>

      <div class="col-sm">
        <ul class="list-group list-group-horizontal">
          <li class="footer-list list-group-item">
            <span style="padding-right: 10px; font-weight:bold; color: white;">FOLLOW US</span>
            <a href="#"><i class="fab fa-facebook-square"></i></a>
            <a href="#"><i class="fab fa-youtube-square"></i></a>
            <a href="#"><i class="fab fa-twitter-square"></i></a>
            <a href="#"><i class="fab fa-snapchat-square"></i></i></a>
            <a href="#"><i class="fab fa-instagram-square"></i></a>
          </li>
        </ul>
      </div>
    </div>
</div>

<!--   Terms and Condition Modal -->
<div class="modal fade" id="termsAndConditions" role="dialog">
    <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">Terms and Conditions</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
            <p>Some terms and conditions bla bla bla.</p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
    </div>
    </div>
</div>

<!-- About FilmFinity modal -->
<div class="modal fade" id="aboutUs" role="dialog">
    <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">About FilmFinity</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
            <p>A COMP3900 20T3 project.</p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
    </div>
    </div>
</div>

<!-- contacts modal -->
<div class="modal fade" id="contacts" role="dialog">
    <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">Contacts</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
            <p>phone numbers/emails</p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
    </div>
    </div>
</div>

<!-- FaQ modal -->
<div class="modal fade" id="faq" role="dialog">
    <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">Frequently asked questions (FAQ)</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
            <h6>Question 1</h6>
            <p>Answer for question 1.</p>
            <h6>Question 2</h6>
            <p>Answer for question 12.</p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
    </div>
    </div>
</footer>
