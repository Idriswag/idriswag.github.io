<?php

require_once "./inc/header.php";

?>

<link rel="stylesheet" href="<?= $_SESSION['home_url'] . 'css/home.css?'.time(); ?>">

<div    class="wencome_section bg_img position-relative overflow-hidden text-center"
        style="background-image: url('<?= $_SESSION['home_url'] . 'images/welcome_image' ?>')">
    
    <div    class="col-md-5 p-lg-5 mx-auto" 
            style="background-color: rgba(0,0,0, 0.3);
                    width: 100%;
                    height: 100%;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    padding: 10px">

        <div>
            <h1 class="display-4 fw-normal text-white" style="font-size: 40px">Doulimmo</h1>
            <p class="lead fw-normal text-white slogan">Achetez ou vendez vos bien immobiliers de la façon la plus simple possible !</p>
        </div>

    </div>

</div>

<div id="products"></div>

<br/><br/>


<div class="products_section" id="products_section">

    <h2 class="ou_separation">
        <span class="trait_1"></span>
        <span class="ou" style="min-width: 250px">Nos produits</span>
        <span class="trait_1"></span>
    </h2>

    <br/>

    <div class="products">
    
        <div class="product">1</div>
        <div class="product">2</div>
        <div class="product">3</div>
        <div class="product">4</div>
        <div class="product">5</div>
        <div class="product">6</div>

    </div>

</div>

<div id="about"></div>

<br/><br/>

<div class="about_section" id="about_section">

    <h2 class="ou_separation">
        <span class="trait_1"></span>
        <span class="ou" style="min-width: 350px">À propos de nous</span>
        <span class="trait_1"></span>
    </h2>

    <br/>

    <div class="about_us">
    
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos culpa natus dolor aliquam vero, ut magnam illum voluptas, quod reprehenderit. Placeat voluptate, quis tempora! Harum voluptas praesentium dolorem corrupti doloribus hic sunt voluptatibus sint saepe exercitationem quod nostrum temporibus excepturi maiores incidunt expedita obcaecati dicta libero, voluptate alias repellendus corporis placeat vitae. Repellat accusantium iure expedita porro cum ex rem, libero accusamus earum unde nesciunt voluptatibus reprehenderit hic non voluptates laborum aperiam? Sit voluptatibus quasi perspiciatis laboriosam, molestiae autem, corrupti totam vel aspernatur recusandae nam sed debitis doloribus, rerum iure, molestias soluta? Sit mollitia, beatae quidem vero harum voluptate necessitatibus molestiae nobis ex doloribus recusandae minus aperiam delectus sint cupiditate nihil, provident voluptatibus soluta neque odit esse sequi atque suscipit reiciendis autem! Fugiat doloremque, laudantium ullam suscipit quia voluptatibus cumque aspernatur ab rem, ratione repudiandae eius sunt est mollitia ducimus, ipsum, facilis. Nihil debitis fugiat sint laborum tenetur incidunt, eum, molestias, alias id veniam consectetur dicta nostrum mollitia in aliquam temporibus velit repellendus adipisci ut. Ab nesciunt soluta velit assumenda sequi debitis repudiandae vero cumque doloribus eveniet perspiciatis blanditiis accusamus, laborum labore error libero nisi ipsam, aspernatur voluptatem laboriosam ipsa, odit voluptates, obcaecati magnam quo. Rem numquam illum mollitia, perspiciatis!

    </div>

</div>

<div id="contact"></div>

<br/><br/>

<div class="contact_section" id="contact_section">

    <h2 class="ou_separation">
        <span class="trait_1"></span>
        <span class="ou" style="min-width: 300px">Nous contacter</span>
        <span class="trait_1"></span>
    </h2>

    <br/>

    <div class="contact_us">

        Vous pouvez nous joindre grâce aux coordonnées suivantes : <br/>

        <a href="tel:+237000000000" class="text-dark"><b>Tel :</b> +237 000000000</a> <br/>
        <a href="mailto:doulimmo@gmail.com" class="text-dark"><b>E-mail</b> : doulimmo@gmail.com</a>

        <br/> <br/>

        ou vous pouvez nous écrire un message :

        <br/><br/>
    
        <form onsubmit="sendMessage(this);return false">

            <label for="email" class="d-block mb-2">Votre adresse E-mail</label>
            <input  type="email" 
                    name='email'
                    id="email"
                    class="d-block w-100"
                    placeholder="Adresse E-mail"
                    required />

            <br/>

            <label for="object" class="d-block mb-2">Objet <span class="mutted">(Facultatif)</span></label>
            <input  type="text" 
                    name='object'
                    id="object"
                    class="d-block w-100"
                    placeholder="Objet de votre message" />

            <br/>

            <label for="message" class="d-block mb-2">Votre message</label>

            <textarea   name="message" 
                        class="d-block w-100" 
                        id="message" 
                        cols="30" 
                        rows="10"
                        placeholder="Écrivez-nous un message"
                        required ></textarea>

            <br/>

            <button type="submit" name="send_message" class="app_btn" style="width: 100%;max-width: 200px">Envoyer</button>

        </form>

    </div>

</div>


<script type="text/javascript" src="<?= $_SESSION['home_url'] . 'js/send_message.js?'.time() ?>"></script>



