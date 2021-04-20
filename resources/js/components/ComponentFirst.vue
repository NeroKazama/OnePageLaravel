<template>
    <div class="sections bg-heavy-blue ">
        <div class="col-11 text-left m-auto section-height">
            <div class="container bg-white rounded w-100 h-100 d-lg-flex d-md-block d-sm-block">
                <div class="CFpadding">
                    <h2 class="p-1"><b>Lorem Ipsum</b></h2>
                    <p class="w-100 h-50">
                    Learn how design thinking, user research,
                        business vision and marketing, and finally designing
                        and creating real digital products for real users.  
                    </p>
                    <div class="p-1 w-50 m-auto">
                        <a class="m-btn m-btn-orange w-100" @click.prevent="DonateMethod()" href="#"><b>Donate</b></a>
                    </div>
                </div>
                <div class="CFpadding2">
                    <img class="w-100 h-100" src="img/first.svg" alt="">
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
 