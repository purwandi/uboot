<div class="project-columns pt-3 pl-5 clearfix position-relative">
  <div class="float-left project-columns-container position-relative offset-for-repository">

    @for($y = 0 ; $y <= 4; $y++)
    <div class="project-column d-inline-block v-align-top bg-gray-light border rounded-1">
      <div class="bg-gray-light border-bottom py-2 px-3 border-bottom clearfix">
        <button type="button" class="float-right js-details-target btn-octicon p-1 tooltipped tooltipped-w" aria-label="Add a note to this column">
          <svg aria-hidden="true" class="octicon octicon-plus" height="16" version="1.1" viewBox="0 0 12 16" width="12">
            <path d="M12 9H7v5H5V9H0V7h5V2h2v5h5z"></path>
          </svg>
        </button>
        <button type="button" class="float-right btn-octicon p-1 text-gray tooltipped tooltipped-w" aria-label="Edit column name">
          <svg aria-hidden="true" class="octicon octicon-pencil" height="16" version="1.1" viewBox="0 0 14 16" width="14"><path d="M0 12v3h3l8-8-3-3-8 8zm3 2H1v-2h1v1h1v1zm10.3-9.3L12 6 9 3l1.3-1.3a.996.996 0 0 1 1.41 0l1.59 1.59c.39.39.39 1.02 0 1.41z"></path></svg>
        </button>

        <h4 class="m-0 f5 v-align-middle d-inline">
          <span class="js-project-column-name">Backlog</span>
          <span class="counter ml-2 position-relative js-column-card-count" aria-label="Contains 4 items">4</span>
        </h4>
      </div>
      <div class="project-column-inner p-2 pb-6 js-project-column-cards js-card-drag-container">
        @for($x = 0; $x <= 20; $x++)
        <div class="issue-card project-card bg-white p-3 pl-5 mb-2 border border-gray rounded-1 js-project-column-card js-socket-channel js-updatable-content draggable">
          <span class="card-octicon position-absolute text-green">
            <svg aria-label="Open Issue" class="octicon octicon-issue-opened open" height="16" role="img" version="1.1" viewBox="0 0 14 16" width="14"><path d="M7 2.3c3.14 0 5.7 2.56 5.7 5.7s-2.56 5.7-5.7 5.7A5.71 5.71 0 0 1 1.3 8c0-3.14 2.56-5.7 5.7-5.7zM7 1C3.14 1 0 4.14 0 8s3.14 7 7 7 7-3.14 7-7-3.14-7-7-7zm1 3H6v5h2V4zm0 6H6v2h2v-2z"></path></svg>
          </span>
          <h5 class="no-underline lh-condensed mr-4 mb-1" style="margin-top: 0px;"><a href="/FroyoStory/storycms/issues/9" draggable="false">Support Drag and Drop or Select File to Upload</a></h5>
          <small class="text-gray d-block">
              #9 opened by <a href="/purwandi" class="text-gray-dark" draggable="false">purwandi</a>
          </small>
          <span class="labels d-block pb-1">
            <span aria-label="View all frontend" class="issue-card-label css-truncate css-truncate-target label mt-1 v-align-middle labelstyle-0052cc linked-labelstyle-0052cc tooltipped tooltipped-n" style="background-color: #0052cc; color: #fff;">frontend</span>
          </span>
          <div class="avatar-stack position-absolute bottom-0 right-0 mr-3 mb-3 tooltipped tooltipped-multiline tooltipped-w" aria-label="Assigned to golgar">
            <img alt="@golgar" class="avatar from-avatar" height="20" src="https://avatars1.githubusercontent.com/u/12383960?v=3&amp;s=40" width="20">
          </div>
        </div>
        @endfor
      </div>
    </div>
    @endfor

  </div>

  <a href="#add-column" role="button" class="new-project-column mb-0 col-4 d-inline-block p-6 v-align-top text-bold text-gray text-center bg-white rounded-1">
    <svg aria-hidden="true" class="octicon octicon-plus" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path d="M12 9H7v5H5V9H0V7h5V2h2v5h5z"></path></svg> Add column
  </a>
</div>
