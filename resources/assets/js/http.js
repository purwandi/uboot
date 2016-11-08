import $ from 'jquery'

export default {

  request (method, url, data, succCb = null, errorCb = null) {

    return $.ajax({
      data,
      dataType: 'json',
      url: '/api/' + url,
      method: method.toUpperCase(),
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    }).done(succCb).fail(errorCb)
  },

  get (url, data, succ = null, error = null) {
    return this.request('get', url, data, succ, error)
  },

  post (url, data, succ = null, error = null) {
    return this.request('post', url, data, succ, error)
  },

  put (url, data, succ = null, error = null) {
    return this.request('put', url, data, succ, error)
  },

  delete (url, data, succ = null, error = null) {
    return this.request('delete', url, data, succ, error)
  },

  init (vm) {
    $(document).ajaxComplete((e, r, settings) => {

    })
  }

}
