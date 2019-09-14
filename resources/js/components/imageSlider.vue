<template>

    <div class="row">
        <div class="col-md-6">
            <div class="single-list-slider owl-carousel" id="sl-slider">
                <div v-for="photo in imagesArraypaths" :key="photo.id" class="sl-item set-bg" :data-setbg="photo.path">
                </div>
            </div>
            <div class="owl-carousel sl-thumb-slider" id="sl-slider-thumb">
                <div v-for="photo in imagesArraypaths" :key="photo.id" class="sl-thumb set-bg"
                     :data-setbg="photo.path"></div>
            </div>
        </div>
    </div>

</template>

<script>
    export default {
        name: "imageSlider",
        props: ['flyer', 'photos'],
        data() {
            return {
                imagesArraypaths: this.photos
            }
        }

    }
</script>
