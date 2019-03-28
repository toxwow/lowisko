<template>
    <div>
        <div class="menu-wrapper sticky-top">
            <div id="fishes" @click="step=1" v-bind:class="{ active: step==1 }">Ryby</div>
            <div id="adds" @click="step=2" v-bind:class="{ active: step==2 }">Dodatki</div>
            <div id="sweets" @click="step=3" v-bind:class="{ active: step==3 }">Coś na słodko</div>
        </div>
            <div class="menu-section">
                <transition name="fade" mode="out-in">
                    <div key="1" v-if="step===1">
                        <div class="row">
                            <div class="col-12 col-md-4" v-for="item in menu.ryby">
                                <div class="item-wrapper">
                                    <div class="img-wrapper">
                                        <!--<div style="background-image: url('/img/menu/karp.png')"></div>-->
                                        <div  v-bind:style="{ backgroundImage: 'url(' + item.img + ')'  }"></div>
                                    </div>
                                    <div class="content-wrapper">
                                        <p class="title"> {{item.name}} </p>
                                        <p class="description">{{item.description}}</p>
                                        <p class="price">{{item.price}}.00 PLN / 100g</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div key="2" v-if="step === 2">
                        <div class="row">
                            <div class="col-12 col-md-4" v-for="item in menu.ryby">
                                <div class="item-wrapper">
                                    <div class="img-wrapper">
                                        <!--<div style="background-image: url('/img/menu/karp.png')"></div>-->
                                        <div  v-bind:style="{ backgroundImage: 'url(' + item.img + ')'  }"></div>
                                    </div>
                                    <div class="content-wrapper">
                                        <p class="title"> {{item.name}} </p>
                                        <p class="description">{{item.description}}</p>
                                        <p class="price">{{item.price}}.00 PLN / 100g</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div key="3" v-if="step === 3">
                        <div class="row">
                            <div class="col-12 col-md-4" v-for="item in menu.ryby">
                                <div class="item-wrapper">
                                    <div class="img-wrapper">
                                        <!--<div style="background-image: url('/img/menu/karp.png')"></div>-->
                                        <div  v-bind:style="{ backgroundImage: 'url(' + item.img + ')'  }"></div>
                                    </div>
                                    <div class="content-wrapper">
                                        <p class="title"> {{item.name}} </p>
                                        <p class="description">{{item.description}}</p>
                                        <p class="price">{{item.price}}.00 PLN / 100g</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </transition>
            </div>


        </div>

</template>

<script>
    export default {
        name: "MenuComponent",
        data(){
            return{
                step: 1,
                menu: {
                    ryby:[
                        {
                            'name': 'Karp',
                            'description': 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet asperiores atque consequatur ipsum nesciunt nisi quaerat quibusdam sunt tempore temporibus? Amet consectetur exercitationem fugit id nobis quibusdam saepe suscipit voluptatem!',
                            'price': 6,
                            'img': './img/menu/karp.png'
                        },
                        {
                            'name': 'Jesiotr',
                            'description': 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet asperiores atque consequatur ipsum nesciunt nisi quaerat quibusdam sunt tempore temporibus? Amet consectetur exercitationem fugit id nobis quibusdam saepe suscipit voluptatem!',
                            'price': 2,
                            'img': './img/menu/jesiotr.png'
                        },
                        {
                            'name': 'Rosół z ryby',
                            'description': 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet asperiores atque consequatur ipsum nesciunt nisi quaerat quibusdam sunt tempore temporibus? Amet consectetur exercitationem fugit id nobis quibusdam saepe suscipit voluptatem!',
                            'price': 6,
                            'img': './img/menu/rosol.png'
                        },
                        {
                            'name': 'Pstrąg',
                            'description': 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet asperiores atque consequatur ipsum nesciunt nisi quaerat quibusdam sunt tempore temporibus? Amet consectetur exercitationem fugit id nobis quibusdam saepe suscipit voluptatem!',
                            'price': 2,
                            'img': './img/menu/pstrag.png'
                        },
                        {
                            'name': 'Amur',
                            'description': 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet asperiores atque consequatur ipsum nesciunt nisi quaerat quibusdam sunt tempore temporibus? Amet consectetur exercitationem fugit id nobis quibusdam saepe suscipit voluptatem!',
                            'price': 6,
                            'img': './img/menu/amur.png'
                        },
                        {
                            'name': 'Ryby wędzone',
                            'description': 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet asperiores atque consequatur ipsum nesciunt nisi quaerat quibusdam sunt tempore temporibus? Amet consectetur exercitationem fugit id nobis quibusdam saepe suscipit voluptatem!',
                            'price': 2,
                            'img': './img/menu/wedzone.png'
                        },
                    ]
                }
            }
        },
        methods:{

        },

    }
</script>

<style scoped>
    .fade-enter-active, .fade-leave-active {
        transition: opacity 0.4s
    }

    .fade-enter, .fade-leave-to {
        opacity: 0
    }

    .item-wrapper{

    }



</style>