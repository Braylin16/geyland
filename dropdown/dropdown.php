<li>
    <a class="dropdown-trigger" href="#" data-target="dropdown1">

        <?php if($photo_profile != false) : ?>
            <img src="img-profile/<?=$photo_profile?>" alt="<?=$name.' '.$surname?>" class="img-dropdown circle img-adaptable" width="34" height="34">
        <?php else : ?>
            <img src="images/user.png" alt="<?=$name.' '.$surname?>" class="img-dropdown circle img-adaptable" width="34" height="34">
        <?php endif ?>


        <i class="material-icons right">arrow_drop_down</i>
    </a>
</li>