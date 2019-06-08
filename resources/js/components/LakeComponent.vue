<template>
    <div class="row">
        <div class="col-12 subpage menu sticky-top">
            <div class="menu-wrapper">
                <div id="fishes" @click="step=1" v-bind:class="{ active: step==1 }">Staw nr. 1</div>
                <div id="adds" @click="step=2" v-bind:class="{ active: step==2 }">Staw nr. 2</div>
            </div>
        </div>
        <div class="col-12 col-md-6 my-2" style="">
            <transition name="fade" mode="out-in">
            <div class="wrapper-img lake" key="1" v-if="step === 1">
                <img :src="staw[1].img" alt="">
            </div>
            <div class="wrapper-img lake" key="2" v-if="step === 2">
                <img :src="staw[2].img" alt="">
            </div>
            </transition>
        </div>
        <div class="col-12 col-md-6 my-2">
            <transition name="fade" mode="out-in">
            <div class="content-wrapper-lake" key="1" v-if="step === 1">
                <p class="title">
                    {{staw[1].name}}
                </p>
                <p class="desc">
                    {{staw[1].desc}}
                </p>
                <div class="progress-wrapper">
                    <div class="progress green">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" :style="{ width: staw[1].valFirst + '%' }"></div>
                    </div>
                    <p>{{staw[1].nameFirst}}</p>
                </div>


                <div class="progress-wrapper">
                    <div class="progress green">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" :style="{ width: staw[1].valTwo + '%' }"></div>
                    </div>
                    <p>{{staw[1].nameTwo}}</p>
                </div>


                <div class="progress-wrapper">
                    <div class="progress green">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" :style="{ width: staw[1].valThree + '%' }"></div>
                    </div>
                    <p>{{staw[1].nameThree}}</p>
                </div>
            </div>
            <div class="content-wrapper-lake" key="2" v-if="step === 2">
                <p class="title">
                    {{staw[2].name}}
                </p>
                <p class="desc">
                    {{staw[2].desc}}
                </p>
                <div class="progress-wrapper">
                    <div class="progress green">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" :style="{ width: staw[2].valFirst + '%' }"></div>
                    </div>
                    <p>{{staw[2].nameFirst}}</p>
                </div>


                <div class="progress-wrapper">
                    <div class="progress green">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" :style="{ width: staw[2].valTwo + '%' }"></div>
                    </div>
                    <p>{{staw[2].nameTwo}}</p>
                </div>


                <div class="progress-wrapper">
                    <div class="progress green">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" :style="{ width: staw[2].valThree + '%' }"></div>
                    </div>
                    <p>{{staw[2].nameThree}}</p>
                </div>
            </div>
            </transition>
        </div>
    </div>
</template>

<script>
    export default {
        name: "LakeComponent",
        data(){
            return{
                step: 1,
                staw: {
                    1:
                        {
                            'name': 'Staw nr. 1',
                            'desc': 'Zbiornik o głębokości od 1.5m do 2.5m. W wodzie znajdują się ryby takie jak karpie królewskie, szczupaki czy jesiotry. Na tym zbiorniku ryba najczęściej ustawia się w sektorze pod lasem.',
                            'valFirst': 50,
                            'valTwo': 20,
                            'valThree': 30,
                            'nameFirst': 'karp',
                            'nameTwo': 'szczupak',
                            'nameThree': 'inne',
                            'img': './img/lake/1.png'
                        },
                    2:
                        {
                            'name': 'Staw nr. 2',
                            'desc': 'Zbiornik o głębokości od 1.5m do 2.5m. Na tym stawie dominują karpie pełnołuskie ze średnią wagą ok.4 kg i jest ich dużo.',
                            'valFirst': 40,
                            'valTwo': 25,
                            'valThree': 35,
                            'nameFirst': 'karp',
                            'nameTwo': 'szczupak',
                            'nameThree': 'inne',
                            'img': './img/lake/2.png'
                        },
                    3:
                        {
                            'name': 'Staw nr. 3',
                            'desc': 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin at laoreet lectus. In hac habitasse platea dictumst. In auctor faucibus ex, in ullamcorper est facilisis id. Cras at eros in tortor',
                            'valFirst': 80,
                            'valTwo': 10,
                            'valThree': 10,
                            'nameFirst': 'duże okazy',
                            'nameTwo': 'pstrąg',
                            'nameThree': 'inne',
                            'img': './img/lake/3.png'
                        },
                }
            }
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
</style>