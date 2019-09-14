<template>

    <div class="row">
        <div class="col-lg-4 col-md-6" v-for="flyer in flyersArray" :key="flyer.id">
            <!-- feature -->
            <div  class="feature-item">
                <div class="feature-pic set-bg" data-setbg="img/feature/2.jpg">
                </div>
                <div class="feature-text">
                    <div class="text-center feature-title">
                        <h5><a :href="'flyers/'+flyer.id+'/edit'">{{flyer.street}}</a></h5>
                        <p><i class="fa fa-map-marker"></i> {{flyer.city}}</p>
                    </div>
                    <div class="room-info-warp">
                        <div class="room-info">
                            <div class="rf-left">
                                <p><i class="fa fa-th-large"></i>{{flyer.area}}</p>
                                <p><i class="fa fa-bed"></i>{{flyer.numberOfBedRooms}}</p>
                            </div>
                            <div class="rf-right">
                                <p><i class="fa fa-car"></i>{{flyer.numberOfGarages}}</p>
                                <p><i class="fa fa-bath"></i>{{flyer.numberOfBathRooms}}</p>
                            </div>
                        </div>
                        <div class="room-info">
                            <div class="rf-left">
                                <p><i class="fa fa-user"></i> Gina Wesley</p>
                            </div>
                            <div class="rf-right">
                                <p><i class="fa fa-clock-o"></i> {{flyer.created_at - Date.now()}}</p>
                            </div>
                        </div>
                    </div>
                    <a class="room-price">{{flyer.price}}</a>
                </div>
            </div>



        </div>
    </div>

</template>

<script>
    export default {
        name: 'housePhotos',
        props: ['flyers'],
        data() {
            return {
                flyersArray: this.flyers
            }
        }
    }
</script>
