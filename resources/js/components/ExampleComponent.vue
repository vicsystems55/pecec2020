<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                            <form action="">

                                <div class="form-group">
                                    <input class="form-control" name="title" type="text" placeholder="Title of Post">
                                </div>

                                <div class="form-group">
                                    <input class="form-control" name="excerpt" type="text" placeholder="Title of Post">
                                </div>

                                <div class="form-group">
                                    <textarea class="form-control" name="body" type="text" placeholder="Title of Post">
                                  </textarea>
                                </div>

                                <div class="form-group">
                                    <input class="form-control" name="featured_image" type="text" placeholder="Image url">
                                </div>

                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" value="">
                                        Politics
                                        <span class="form-check-sign">
                                            <span class="check"></span>
                                        </span>
                                    </label>
                                </div>




                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
