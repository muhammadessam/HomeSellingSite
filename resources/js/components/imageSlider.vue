<template>

    <div class="row">
        <div class="col-md-8">
            <div class="single-list-slider owl-carousel" id="sl-slider">
                <div v-for="photo in imagesArraypaths" :key="photo.id" class="sl-item set-bg" :data-setbg="photo.path">
                </div>
            </div>
            <div class="owl-carousel sl-thumb-slider" id="sl-slider-thumb">
                <div v-for="photo in imagesArraypaths" :key="photo.id" class="sl-thumb set-bg"
                     :data-setbg="photo.path"></div>
            </div>
            <div class="single-list-content">
                <div class="row">
                    <div class="col-xl-8 sl-title">
                        <h2>{{flyer.street}}</h2>
                        <p><i class="fa fa-map-marker"></i>{{flyer.city}}</p>
                    </div>
                    <div class="col-xl-4">
                        <a href="#" class="price-btn">${{flyer.price}}</a>
                    </div>
                </div>
                <h3 class="sl-sp-title">Property Details</h3>
                <div class="row property-details-list">
                    <div class="col-md-4 col-sm-6">
                        <p><i class="fa fa-th-large"></i> {{flyer.area}}</p>
                        <p><i class="fa fa-bed"></i> {{flyer.numberOfBedRooms}}</p>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <p><i class="fa fa-car"></i> {{flyer.numberOfGarages}} Garages</p>
                        <p><i class="fa fa-clock-o"></i>{{createdOn(flyer)}}</p>
                    </div>
                    <div class="col-md-4">
                        <p><i class="fa fa-bath"></i> {{flyer.numberOfBathRooms}} Bathrooms</p>
                    </div>
                </div>
                <h3 class="sl-sp-title">Description</h3>
                <div class="description">
                    <p>{{flyer.description}}</p>
                </div>
                <h3 class="sl-sp-title">Photos Upload</h3>
                <div class="description">
                    <!-- adding dropzone-->


                </div>

            </div>


        </div>

        <div class="col-lg-4 col-md-7 sidebar">
            <div class="author-card">
                <div class="author-info">
                    <h5>{{flyeruser.name}}</h5>
                </div>
                <div class="author-contact">
                    <p><i class="fa fa-envelope"></i>{{flyeruser.email}}</p>
                </div>
            </div>
        </div>


    </div>

</template>

<script>
    import moment from 'moment'

    export default {
        name: "imageSlider",
        props: ['flyer', 'photos', 'flyeruser', 'canupdated'],
        data() {
            return {
                imagesArraypaths: this.photos
            }
        },
        methods: {
            createdOn(flyer) {
                return moment(flyer.created_at).fromNow();
            }
        }

    }
</script>
