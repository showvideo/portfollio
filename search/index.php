<head>
    <script type="text/javascript"></script>
</head>    
<?php require_once("../common/function.php"); ?>
<?php $search_name = $_POST['search_name']; ?>

<div style="display:inline-block;">
<table border="1" cellspacing="0" style="border-collaspe:collapse;">
                    
    <tr style="background-color:#384D98;">
        <th style="width:100px;height:35px;border:1px solid #ccc;background:#fff;padding:4px;">お名前</th>
        <th style="width:60px;height:35px;border:1px solid #ccc;background:#fff;padding:4px;">来所</th>
        <th style="width:60px;height:35px;border:1px solid #ccc;background:#fff;padding:4px;">退所</th>
        <th style="width:130px;height:35px;border:1px solid #ccc;background:#fff;padding:4px;">最高・最低血圧/脈拍</th>
        <th style="width:60px;height:35px;border:1px solid #ccc;background:#fff;padding:4px;">入浴</th>
        <th style="width:60px;height:35px;border:1px solid #ccc; background:#fff;padding:4px;">食事</th>
        <th style="width:170px;height:35px;border:1px solid #ccc; background:#fff;padding:4px;">特記事項</th>
    </tr>
     
        <?php
            if(!empty(($_POST['search_name'])or($_POST['search_visit'])or($_POST['search_exit'])) {
                
            $sql = "SELECT id, name, visit, exits, maxblood, meal, bath, notices FROM user WHERE (name LIKE '%".searchName($_POST['search_name'])."%') or (visit=:visit) 
                    or (exits=:exit)";
            $stmt = getDB()->prepare($sql);
            $stmt->bindParam(':visit', searchName($_POST['search_visit']), PDO::PARAM_STR);
            $stmt->bindParam(':exit', searchName($_POST['search_exit']), PDO::PARAM_STR);
            $stmt->execute();
            $result = $stmt->fetchAll();
            foreach($result as $user){
            $id = $user['id'];     
            $name = $user['name']; 
            $visit = $user['visit']; 
            $exit = $user['exit'];
            $bath = $bath['bath'];
            echo $name;
            echo $visit;
        ?>
           
        <?php 
            if(!empty(($_POST['maxblo']) or ($_POST['maxblo1']) {
                 
            $sql = "SELECT id, name, visit, exits, maxblood, meal, bath, notices FROM user WHERE maxblo BETWEEN :maxblo and :maxblo1 "
            
            $stt = getDB()->prepare($sql);
            $stt->bindParam(':maxblo, $_POST['maxblo'],PDO::PARAM_STR');
            $stt->bindParam(':maxblo1, $_POST['maxblo1'],PDO::PARAM_STR');
            $stt->execute();
            $result = $stt->fetchAll();
            foreach($result as $user) {
                            $id = $user['id'];     
            $name = $user['name']; 
            $visit = $user['visit']; 
            $exit = $user['exit'];
            $bath = $bath['bath'];
                
            
        ?>
    <tr>
        <!--お名前-->
        <td style="width:100px;height:34px;border:1px solid #ccc;background:#fff;padding:4px;">
        <?php if(isset($name)){ ?>
            <form action="information/index.php/<?php echo $id ?>/" method="post">
            <a href="information/index.php/<?php echo $id ?>/" style="text-decoration:none;color:black;"><?php echo $name; ?></a>
            </form>    
        <?php } ?>
        </td>
           
        <!--来所-->
        <td style="width:60px;height:34px;border:1px solid #ccc;background:#fff;padding:4px;">
        <?php if(empty($visit)){ ?>                       
          
            <a href="../../input/index.php/<?php echo $id; ?>/?visitime=1" style="opacity:0;">TIME</a>                       
            <?php }else { ?>
        
            <a href="../../input/index.php/<?php echo $id; ?>/?visitime1=1" ><?php echo $visit; ?></a>     
        <?php } ?>
        </td>
        
        <!--退所-->
        <td style="width:60px;height:34px;border:1px solid #ccc;background:#fff;padding:4px;">
        <?php if(empty($exits)){ ?>                       
          
            <a href="../../input/index.php/<?php echo $id; ?>/?exitime=1" style="opacity:0;">TIME</a>                       
            <?php }else { ?>
        
            <a href="../../input/index.php/<?php echo $id; ?>/?exitime1=1" ><?php echo $exits; ?></a>     
        <?php } ?>
        </td>
        
        <!--最高・最低血圧/脈拍-->
        <td style="width:60px;height:34px;border:1px solid #ccc;background:#fff;padding:4px;">
        <?php if(empty($maxblood)){ ?>                       
          
            <a href="../../input/index.php/<?php echo $id; ?>/?bloodp=1" style="opacity:0;">TIME</a>                       
            <?php }else { ?>
        
            <a href="../../input/index.php/<?php echo $id; ?>/?bloodp1=1" ><?php echo $maxblood ?></a>     
        <?php } ?>
        </td>
        
        <!--入浴-->
        <td style="width:60px;height:34px;border:1px solid #ccc;background:#fff;padding:4px;">
            <?php echo $bath ?>     
        </td>
        
        
        <!--食事-->
        <td style="width:60px;height:34px;border:1px solid #ccc;background:#fff;padding:4px;">
            <?php echo $meal ?>     
        </td>
        
        
        <!--特記事項-->
        <td style="width:60px;height:34px;border:1px solid #ccc;background:#fff;padding:4px;">
        <?php if(empty($notices)){ ?>                       
          
            <a href="../../input/index.php/<?php echo $id; ?>/?noticesing=1" style="opacity:0;">TIME</a>                       
            <?php }else { ?>
        
            <a href="../../input/index.php/<?php echo $id; ?>/?noticesing1=1" ><?php echo $notices ?></a>     
        <?php } ?>
        </td>
    </tr>
        <?php } ?>    
        <?php } ?>
   <?php } ?>  
   
    
    <?php
            if(!empty($_POST['visit100'])) {
                
            $sql = "SELECT id, name, visit, exits, maxblood, meal, bath, notices FROM user WHERE visit=:visit";
            $stmt = getDB()->prepare($sql);
            $stmt->bindParam(':visit', $_POST['visit100'], PDO::PARAM_STR);
            $stmt->execute();
            $result = $stmt->fetchAll();
            foreach($result as $user){
            echo $name;
        ?>
    
            <tr>
                <td style="width:100px;height:35px;border:1px solid #ccc;background:#fff;padding:4px;"><?php if(!empty($user['name'])){  
                ?><a href="information/index.php/<?php echo $id ?>/" style="text-decoration:none;color:black;"><?php echo $user['name']; ?></a><?php } else { echo null; } ?></td>
                
                <?php /*来所*/ ?>
                <td style="width:60px;height:35px;border:1px solid #ccc;background:#fff;padding:4px;"><?php if(empty($user['visit'])){ ?>                       
                    <form action="input/index.php/<?php echo $id ?>/" method="post">                           
                    <a href="input/index.php/<?php echo $id ?>/" style="opacity:0;"><input type="submit" value="submit" style="height:30px;margin:0;"></a>
                    <input type="hidden" name="posts" value="100">
                    </form>
                    <?php }else { ?>
                    <a href="input/index.php/<?php echo $id ?>/?posts=100" style="text-decoration:none;color:black;"><?php echo $user['visit']; ?></a>
                    <?php } ?>
                </td>
                
                <?php /*退所*/ ?>
                <td style="width:60px;height:35px;border:1px solid #ccc;background:#fff;padding:4px;"><?php /*if(empty($user['exit'])){ ?>
                <form "method="post" action="input/index.php">
                <input type="hidden" name="post1" value="post1"></form>
                <a href="input/index.php/<?php echo $id ?>/" style="opacity:0;"><?php echo "opacity";?></a><?php }else { echo $user['exit'];} */?></td>
    
                <?php /*バイタル*/ ?>
                <td style="width:90px;height:35px; border: 1px solid #ccc;background:#fff;padding:4px;"><?php if(empty($user['vital'])){ ?>                                     
                    <form action="input/index.php/<?php echo $id ?>/" method="post">                           
                    <a href="input/index.php/<?php echo $id ?>/" style="opacity:0;"><input type="submit" value="佐藤" style="height:30px;margin:0;></a>
                    <input type="hidden" name="post1" value="100">
                    </form>
                <?php }else { ?><a href="input/index.php/<?php echo $id ?>/?post1=100" style="text-decoration:none;color:black;"><?php echo $user['vital']; ?></a>
                    <?php } ?></td>

                <?php /*入浴*/ ?>  
                <td style="width:50px;height:35px;border:1px solid #ccc;background:#fff;padding:4px;"><?php if(empty($user['bath'])){ ?>                                          
                    <form action="input/index.php/<?php echo $id ?>/" method="post">                           
                    <a href="input/index.php/<?php echo $id ?>/" style="opacity:0;"><input type="submit" value="佐藤" style="height:30px;margin:0;></a>
                    <input type="hidden" name="post2" value="100">
                    </form>
                <?php }else { ?><a href="input/index.php/<?php echo $id; ?>/" style="text-decoration:none;color:black;"><?php echo $user['bath']; ?></a> <?php } ?></td>

                <?php /*食事*/ ?>
                <td style="width:50px;height:35px; border:1px solid #ccc;background:#fff;padding:4px;"><?php if(empty($user['meal'])){ ?>                                   
                    <form action="input/index.php/<?php echo $id ?>/" method="post">                           
                    <a href="input/index.php/<?php echo $id ?>/" style="opacity:0;"><input type="submit" value="佐藤" style="height:20px;margin:0;"></a>
                    <input type="hidden" name="post3" value="100">
                    </form>
                <?php }else { ?><a href="input/index.php/<?php echo $id; ?>/" style="text-decoration:none;color:black;"><?php echo $user['meal']; ?></a> <?php } ?></td>

                <?php /*特記事項*/ ?>
                <td style="width:170px;height:35px; border: 1px solid #ccc;background:#fff;padding:4px;"><?php if(empty($user['notices'])){ ?>                                           
                    <form action="input/index.php/<?php echo $id ?>/" method="post">                           
                    <a href="input/index.php/<?php echo $id ?>/" style="opacity:0;"><input type="submit" value="佐藤" style="height:25px;margin:0;"></a>
                    <input type="hidden" name="post4" value="100">
                    </form>
                <?php }else { ?><a href="input/index.php/<?php echo $id; ?>/" style="text-decoration:none;color:black;"><?php echo $user['notices']; ?></a> <?php } ?></td>

            </tr>
            
        <?php } ?>
   <?php } ?>  
    
     <?php if(!empty($_POST[bath1])) {
            $sql = "SELECT id, name, visit, exits, maxblood, meal, bath, notices FROM user Wehre bath IS NOT NULL";
            $stmt = getDB()->preapre($sql);
            $stmt->execute();
            $result = $stmt->fetchAll();
            foreach($result as $user) {
                $bath = $user['bath']; ?>
                 <tr>
        <!--お名前-->
        <td style="width:100px;height:34px;border:1px solid #ccc;background:#fff;padding:4px;">
        <?php if(isset($name)){ ?>
            <form action="information/index.php/<?php echo $id ?>/" method="post">
            <a href="information/index.php/<?php echo $id ?>/" style="text-decoration:none;color:black;"><?php echo $name; ?></a>
            </form>    
        <?php } ?>
        </td>
           
        <!--来所-->
        <td style="width:60px;height:34px;border:1px solid #ccc;background:#fff;padding:4px;">
        <?php if(empty($visit)){ ?>                       
          
            <a href="../../input/index.php/<?php echo $id; ?>/?visitime=1" style="opacity:0;">TIME</a>                       
            <?php }else { ?>
        
            <a href="../../input/index.php/<?php echo $id; ?>/?visitime1=1" ><?php echo $visit; ?></a>     
        <?php } ?>
        </td>
        
        <!--退所-->
        <td style="width:60px;height:34px;border:1px solid #ccc;background:#fff;padding:4px;">
        <?php if(empty($exits)){ ?>                       
          
            <a href="../../input/index.php/<?php echo $id; ?>/?exitime=1" style="opacity:0;">TIME</a>                       
            <?php }else { ?>
        
            <a href="../../input/index.php/<?php echo $id; ?>/?exitime1=1" ><?php echo $exits; ?></a>     
        <?php } ?>
        </td>
        
        <!--最高・最低血圧/脈拍-->
        <td style="width:60px;height:34px;border:1px solid #ccc;background:#fff;padding:4px;">
        <?php if(empty($maxblood)){ ?>                       
          
            <a href="../../input/index.php/<?php echo $id; ?>/?bloodp=1" style="opacity:0;">TIME</a>                       
            <?php }else { ?>
        
            <a href="../../input/index.php/<?php echo $id; ?>/?bloodp1=1" ><?php echo $maxblood ?></a>     
        <?php } ?>
        </td>
        
        <!--入浴-->
        <td style="width:60px;height:34px;border:1px solid #ccc;background:#fff;padding:4px;">
            <?php echo $bath ?>     
        </td>
        
        
        <!--食事-->
        <td style="width:60px;height:34px;border:1px solid #ccc;background:#fff;padding:4px;">
            <?php echo $meal ?>     
        </td>
        
        
        <!--特記事項-->
        <td style="width:60px;height:34px;border:1px solid #ccc;background:#fff;padding:4px;">
        <?php if(empty($notices)){ ?>                       
          
            <a href="../../input/index.php/<?php echo $id; ?>/?noticesing=1" style="opacity:0;">TIME</a>                       
            <?php }else { ?>
        
            <a href="../../input/index.php/<?php echo $id; ?>/?noticesing1=1" ><?php echo $notices ?></a>     
        <?php } ?>
        </td>
    </tr>
            
        <?php } ?>
   <?php } ?>  
   
</table>
    <input type="button" onclick="location.href='https://animech2.herokuapp.com/'" value="一覧へ戻る">
</div>
<?php require_once("../parts/search.php"); ?>
