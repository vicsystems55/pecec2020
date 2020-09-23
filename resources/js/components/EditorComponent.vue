<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Create Post</div>

                    <div class="card-body">
                            <editor ref="editor" :config="config" :initialized="onInitialized"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import { Editor } from 'vue-editor-js'

export default {
  // ...
  components: {
    Editor,
  },
  // ...
}
</script>
