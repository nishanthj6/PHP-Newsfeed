<?php include ('overall_header.php'); ?>

<div class="panel">
<?php foreach($_SESSION['Results'] as $r): ?>

    <h3><?=$r['title'];?></h3>
    <div class="content">
        <p><?=$r['text'];?></p>
        <span class="author">
            <br />Posted by <?=$r['author']. " at ". date($r['date']);?><br />
            <i>Likes: <?=$r['likes'];?></i><br>
            <?= LikeSystem(); ?>
        </span>
    </div>

<?php  endforeach; ?>
</div>

<?php include ('overall_footer.php'); ?>
