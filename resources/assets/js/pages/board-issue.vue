<template>
<div class="issue-card dragable" draggable="true" @dragstart="drag" data-id="1">
  <span class="card-icon">
    <i class="material-icons md-18 text-green">info_outline</i>
  </span>
  <h5>
    <a href="/FroyoStory/storycms/issues/9" draggable="false">
      Support Drag and Drop or Select File to Upload
    </a>
  </h5>
  <small class="text-gray d-block">
    #9 opened by <a href="/purwandi" class="text-gray-dark" draggable="false">purwandi</a>
  </small>
  <span class="labels">
    <span aria-label="View all frontend" class="issue-card-label css-truncate css-truncate-target label mt-1 v-align-middle labelstyle-0052cc linked-labelstyle-0052cc tooltipped tooltipped-n" style="background-color: #0052cc; color: #fff;">frontend</span>
  </span>
  <div class="avatar-stack position-absolute bottom-0 right-0 mr-3 mb-3 tooltipped tooltipped-multiline tooltipped-w" aria-label="Assigned to golgar">
    <img alt="@golgar" class="avatar from-avatar" height="20" src="https://avatars1.githubusercontent.com/u/12383960?v=3&amp;s=40" width="20">
  </div>
</div>
</template>

<script>
export default {
  data () {
    return {

    }
  },

  methods: {
    drag (event) {
      console.log(event)

      // event.dataTransfer.setData("text", event.target.id)
      // console.log(event.target.id)
    }
  }
}
</script>
