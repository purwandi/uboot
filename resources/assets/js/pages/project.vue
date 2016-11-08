<template>
  <div class="container">
    <div class="row">
      <div class="col-sm-8">
        <div class="panel panel-default">
          <div class="panel-heading">Available projects</div>
          <table class="table" v-if="projects.length > 0">
            <tbody>
              <tr v-for="project in projects">
                <td class="col-sm-3">{{ project.name }}</td>
                <td class="col-sm-8">{{ project.description }}</td>
                <td class="col-sm-1"><a :href="'/boards/' + project.id">Detail</a></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="panel panel-default">
          <div class="panel-heading">Create new project</div>
          <div class="panel-body">
            <div class="form-group">
              <label>Project name</label>
              <input type="text" name="name" v-model="form.name" class="form-control">
            </div>
            <div class="form-group">
              <label>Project description</label>
              <textarea name="description" v-model="form.description" class="form-control" rows="3"></textarea>
            </div>

            <div class="form-group">
              <label>Slack channel</label>
              <select class="form-control" name="slack_channel_id" v-model="form.slack_id">
                <option></option>
                <option v-for="channel in options.slack" v-if="options.slack.length > 0" :value="channel.id">#{{ channel.name }}</option>
              </select>
              <small class="help-block">If empty we will create new channel for you</small>
            </div>

            <div class="form-group">
              <label>GitLab projects</label>
              <select class="form-control" name="gitlab_id" v-model="form.gitlab_id">
                <option></option>
                <option v-for="repo in options.gitlab" v-if="options.gitlab.length > 0" :value="repo.id">{{ repo.name }}</option>
              </select>
              <small class="help-block">If empty we will create new project for you</small>
            </div>

            <div class="form-group">
              <button class="btn btn-primary" @click="store">Create project</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import Http from '../http'

export default {
  data () {
    return {
      form: {
        name: '',
        description: '',
        gitlab_id: '',
        slack_id: ''
      },
      options: {
        slack: [],
        gitlab: []
      },
      projects: []
    }
  },

  mounted () {
    this.fetch()
  },

  methods: {
    fetch () {
      var vm = this

      Http.get('projects', [], (response) => {
        vm.projects = response
      })

      Http.get('slack', [], (response) => {
        vm.options.slack = response.channels
      })

      Http.get('gitlab', [], (response) => {
        vm.options.gitlab = response
      })
    },

    store () {
      Http.post('projects', this.form, (response) => {

      })
    }
  }
}
</script>
