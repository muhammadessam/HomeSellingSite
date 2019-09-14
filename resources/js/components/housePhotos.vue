<template>

    <div class="row">
        <div class="col-lg-4 col-md-6">
            <!-- feature -->
            <div class="feature-item">
                <div class="feature-pic set-bg" data-setbg="img/feature/2.jpg">
                    <div class="sale-notic">FOR SALE</div>
                </div>
                <div class="feature-text">
                    <div class="text-center feature-title">
                        <h5>305 North Palm Drive</h5>
                        <p><i class="fa fa-map-marker"></i> Beverly Hills, CA 90210</p>
                    </div>
                    <div class="room-info-warp">
                        <div class="room-info">
                            <div class="rf-left">
                                <p><i class="fa fa-th-large"></i> 1500 Square foot</p>
                                <p><i class="fa fa-bed"></i> 16 Bedrooms</p>
                            </div>
                            <div class="rf-right">
                                <p><i class="fa fa-car"></i> 2 Garages</p>
                                <p><i class="fa fa-bath"></i> 8 Bathrooms</p>
                            </div>
                        </div>
                        <div class="room-info">
                            <div class="rf-left">
                                <p><i class="fa fa-user"></i> Gina Wesley</p>
                            </div>
                            <div class="rf-right">
                                <p><i class="fa fa-clock-o"></i> 1 days ago</p>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="room-price">$4,500,000</a>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'housePhotos',
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
