<div class="pagination">
    <button class="btn btn-default" @click="fetchReleases(pagination.prev_page_url)"
    :disabled="!pagination.prev_page_url">
    Previous
    </button>
    <span class="pagination-text">Page @{{pagination.current_page}} of @{{pagination.last_page}}</span>
    <button class="btn btn-default" @click="fetchReleases(pagination.next_page_url)"
    :disabled="!pagination.next_page_url">Next
    </button>
</div>