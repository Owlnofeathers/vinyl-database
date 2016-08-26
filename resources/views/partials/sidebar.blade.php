<div class="sidebar col-md-4">
    <h3 class="page-header">Recently added to Discogs</h3>
    <ul>
        <template v-for="latestRelease in latestReleases">
            <li class="lead list-unstyled text-left">
                <a href="/record/@{{ latestRelease.id }}" title="View @{{ latestRelease.basic_information.title }}">
                    @{{ latestRelease.basic_information.artists[0].name }} - @{{ latestRelease.basic_information.title }}
                </a>
            </li>
        </template>
    </ul>
</div>