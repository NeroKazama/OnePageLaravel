<template>
    <div class="sections">
        <div class="col-12 text-left section-height mt-5 pt-5">
            <div class="container w-100 h-100 m-auto bg-white sections-seventh">
                <div class="w-100 h-25 text-center mt-4">
                    <h1 class="pt-5"><b>Lorem Ipsum</b><p>Lorem Ipsum</p></h1>
                </div>
                <div class="w-100 h-75">
                    <div class="h-100 p-4">
                        <p class="h-25">
                            <b>What will be our achievements by participating in this course?</b>
                        </p>
                        <p class="h-25"><img class="h-50 mr-3" src="img/tick.svg" alt="">
                            Learn the requirements of a product designer from experienced professionals in the field.</p>
                        <p class="h-25"><img class="h-50 mr-3" src="img/tick.svg" alt="">
                            Learn the requirements of a product designer from experienced professionals in the field.</p>
                        <p class="h-25"><img class="h-50 mr-3" src="img/tick.svg" alt="">
                            Learn the requirements of a product designer from experienced professionals in the field.</p>
                    </div>
                    <div class="w-25 h-75 mt-5 sections-seventh-2 p-4 white text-center">
                        <p>
                         Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut    
                        </p>
                        <a href="#" @click.prevent="DonateMethod()" class="w-50 btn">Donate</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>


 
 <script>
 
 export default({
     methods: {
         DonateMethod() {
            this.$parent.DonateMethod();  
         }
     }
 })

 </script>