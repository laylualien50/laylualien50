<style>
    .tin-container{
        width: 1300px;
        margin: 0 auto;
    }
        .tieude>h2 {
            font-size: 2em;
            margin-top: 50px;
            text-align: center;
        }

        .tintuc {
            width: 100%;
            height: 100%;
            display: flex;
            /* margin: 20px 0; */
            margin: 30px 0;
            flex-wrap: wrap;
            justify-content:space-between;
        }

        .tin {
            width: 48%;
            margin: 30px 10px ;
            height: 15em;
            display: flex;

        }

        .tintuc>.tin>.anh>img {
            width: 24.9rem;
            height: 14.4rem;
            object-fit: cover;
            border-radius: 10px;
        }

        .content-text-tin{
            margin-left: 1em;
            /* font-family: 'Signika Negative'; */
            font-weight: bold;
        }

        .tin>.content-text-tin>h1 {
            font-size: 1.5em;
            /* width: 10.5em;
            height: 3.5em; */
            
        }

        .tin>.content-text-tin>h5 {
            font-size: 1em;
            width: 12em;
            height: 6em;
            overflow: hidden;

        }

        .btn-group .button {
            border: 2px solid black;
            color: black;
            padding: 0.25em 1.3em;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 1.1em;
            cursor: pointer;
            border-radius: 0.4em;
        }
        .btn-group .button a {
            color: black;
            border-radius: 0.4em;
        }

        .btn-group .button:not(:last-child) {
            border-right: none;
        }

        .btn-group a .button :hover {
            background-color: black;
            /* color: white; */
        }
        .btn-group a  :hover {
            background-color: #FFD333;
            color: black;
            border: #FFD333;
        }
        /* .content-text-tin h5{
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        } */
</style>


<div class="tin-container">
    <div class="tieude">
        <h2>Bài Viết</h2>
    </div>
    <div class="tintuc">
        <?php 
            if(isset($pages) && count($pages) > 0){
                foreach($pages as $page){
        ?>
            <div class="tin">
                <div class="anh">
                    <img src="../img/<?=$page['image']?>">
                </div>
                <div class="content-text-tin">
                    <h1><?=$page['title']?></h1>
                    <h5><?=$page['description']?></h5>
                    <div class="btn-group">
                        <a href="blog.html<?=$page['id']?>"><button class="button">Xem </button></a>
                    </div>
                </div>
            </div>
        <?php 
            }
        }else{
echo 'Chưa có bài viết nào !';
        }
        ?>
    </div>
</div>