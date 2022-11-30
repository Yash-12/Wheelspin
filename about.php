
<style>
    header.masthead, header.masthead:before {
    min-height: 50vh !important;
    height: 50vh !important;
}

header.masthead:before {
    content: "";
    background: #00000087;
    position: absolute;
    width: calc(100%);
    /* height: calc(100%); */
    top: 0;
    height: 49vh !important;
    z-index: 1;
}
</style>

<!-- Masthead-->
        <header class="masthead">
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-10 align-self-end mb-4" >
                    	 <h1 class="text-uppercase text-white font-weight-bold">About Us</h1>
                        <hr class="divider my-4" />
                    </div>
                    
                </div>
            </div>
        </header>

    <section class="page-section">
        <div class="container">
    <?php echo html_entity_decode($_SESSION['system']['about_content']) ?>        
            
        </div>
        </section>