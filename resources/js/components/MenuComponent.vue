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
                                    <div class="content-wrapper"  style="height: 280px">
                                        <h3 class="title"> {{item.name}} </h3>
                                        <p class="description">{{item.description}}</p>
                                        <p class="price">{{item.price}}</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div key="2" v-if="step === 2">
                        <div class="row">
                            <div class="col-12 col-md-4" v-for="item in menu.dodatki">
                                <div class="item-wrapper" style="">
                                    <div class="img-wrapper">
                                        <!--<div style="background-image: url('/img/menu/karp.png')"></div>-->
                                        <div  v-bind:style="{ backgroundImage: 'url(' + item.img + ')'  }"></div>
                                    </div>
                                    <div class="content-wrapper" style="height: 130px">
                                        <p class="title"> {{item.name}} </p>
                                        <!--<p class="description">{{item.description}}</p>-->
                                        <p class="price">{{item.price}}</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div key="3" v-if="step === 3">
                        <div class="row">
                            <div class="col-12 col-md-6" v-for="item in menu.ciasta">
                                <div class="item-wrapper">
                                    <div class="img-wrapper">
                                        <!--<div style="background-image: url('/img/menu/karp.png')"></div>-->
                                        <div  v-bind:style="{ backgroundImage: 'url(' + item.img + ')'  }"></div>
                                    </div>
                                    <div class="content-wrapper"  style="height: 250px">
                                        <p class="title"> {{item.name}} </p>
                                        <p class="description">{{item.description}}</p>
                                        <p class="price">{{item.price}}</p>
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
                            'description': 'Karpia podajemy przeważnie w dzwonkach, dzięki czemu z łatwością obiera się go z ości. Mięso jest delikatne i nie śmierdzi "mułem".  Konsumowany regularnie korzystnie wpływa na pracę serca, pamięć i odporność organizmu. ',
                            'price': '7.00 PLN / 100g',
                            'img': './img/menu/karp.png'
                        },
                        {
                            'name': 'Jesiotr',
                            'description': 'Mięso z jesiotra jest delikatne i smaczne, a przede wszystkim całkowicie pozbawione ości. Dostarcza naszemu organizmowi cennych mikroelemntów - fosforu i potasu, witaminy A. Dzięki czemu reguluję pracę serca, stanowi budulec kości i zębów.',
                            'price': '10.00 PLN / 100g',
                            'img': './img/menu/jesiotr.png'
                        },
                        {
                            'name': 'Rosół z ryby',
                            'description': 'Zupa rybna jest bardzo zdrową potrawą, a zarazem pyszna i sycąca. Zawiera wiele niezbędnych  składników odżywczych. Zastosowany proces obróbki termicznej w postaci gotowania, nie zabija wartościowych kwasów omega-3.  ',
                            'price': '10.00 PLN',
                            'img': './img/menu/rosol.png'
                        },
                        {
                            'name': 'Pstrąg',
                            'description': 'Pstrąg ma bladoróżowe, deliaktne chude mięso. Spośród wszystkich ryb słodkowodnych to pstrąg dostarcza najwięcej cennych kwasów omega-3, które korzystnie wypływają na cerę, prace serca czy układu krążenia.',
                            'price': '7.00 PLN / 100g',
                            'img': './img/menu/pstrag.png'
                        },
                        {
                            'name': 'Amur',
                            'description': 'Amur należy do ryb karpiowatych. Jego mięso jest białe, bardzo delikatne, soczyste i jędrne. W porównaniu do karpia, mięso z amura jest dużo chudsze. Amur ma również mniej ości, które łatwo odchodzą od mięsa.',
                            'price': '7.00 PLN / 100g',
                            'img': './img/menu/amur.png'
                        },
                        // {
                        //     'name': 'Ryby wędzone',
                        //     'description': 'W naszej ofercie znajdą Państwo wędzone karpie, jesiotry, pstrągi oraz amury. Wędzenie odbywa się regularnie we wtorki i soboty. Najczęściej do wędzenia wykorzystujemy drewno z wiśni.',
                        //     'price': '4.80 PLN / 100g',
                        //     'img': './img/menu/wedzone.png'
                        // },
                    ],
                    'dodatki':[
                        {
                            'name': 'Frytki',
                            'description': 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet asperiores atque consequatur ipsum nesciunt nisi quaerat quibusdam sunt tempore temporibus? Amet consectetur exercitationem fugit id nobis quibusdam saepe suscipit voluptatem!',
                            'price': '6.00 PLN / 300g',
                            'img': './img/menu/chips.png'
                        },
                        {
                            'name': 'Ziemniaki pieczone',
                            'description': 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet asperiores atque consequatur ipsum nesciunt nisi quaerat quibusdam sunt tempore temporibus? Amet consectetur exercitationem fugit id nobis quibusdam saepe suscipit voluptatem!',
                            'price': '6.00 PLN / 300g',
                            'img': './img/menu/potato.png'
                        },
                        {
                            'name': 'Surówka',
                            'description': 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet asperiores atque consequatur ipsum nesciunt nisi quaerat quibusdam sunt tempore temporibus? Amet consectetur exercitationem fugit id nobis quibusdam saepe suscipit voluptatem!',
                            'price': '6.00 PLN',
                            'img': './img/menu/salat.png'
                        },
                    ],
                    'ciasta':[
                        {
                            'name': 'Beza',
                            'description': 'Naszą słodką specjalnością jest tort bezowy. Są to blaty bezowe przekładane kremem na bazie serka mascarpone i śmietany z dodatkiem sezonowych owoców i konfitur. Gorąco zachęcamy do spróbowania!',
                            'price': '13.00 PLN',
                            'img': './img/menu/cake-2.png'
                        },
                        {
                            'name': 'I wiele innych',
                            'description': 'Staramy się, aby w każdy weekend zawitało coś słodkiego! Gościem specjalnym jak zawsze jest beza, ale znajdą Państwo u nas również inne wypieki, takie jak serniki, owocowe tarty czy Brownie.',
                            'price': 'Zapytaj obsługi o ofertę',
                            'img': './img/menu/cake-4.png'
                        }
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