@extends('layouts.main')

@section('content')

    <div class="container text-center">
        <h1 class="page-header">Adam's Records</h1>

        {{--@include('partials.search',['url'=>'record'])--}}
        {{--<br><br>--}}
        <div class="row">
            <div class="col-md-8">

                @include('partials.vue-pagination')
                    <ul>
                        <template v-for="release in releases">
                            <li class="lead list-unstyled text-left">
                                <a href="/record/@{{ release.id }}">
                                    @{{ release.basic_information.artists[0].name }} - @{{ release.basic_information.title }}
                                </a>
                            </li>
                        </template>
                    </ul>
                @include('partials.vue-pagination')

            </div>

            @include('partials.sidebar')

        </div>
    </div>

@endsection

@section('scripts')
    <script src="http://cdnjs.cloudflare.com/ajax/libs/vue/1.0.24/vue.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue-resource/0.7.0/vue-resource.js"></script>

    <script type="text/javascript">
        Vue.component('release', {
            template: '#template-release',
            props: ['release'],
        })
        window.onload = function(){
            new Vue({
                el: '.row',
                data: {
                    releases: [],
                    latestReleases: [],
                    pagination: {}
                },
                ready: function () {
                    this.fetchReleases()
                    this.fetchLatestReleases()
                },
                methods: {
                    fetchReleases: function (page_url) {
                        let vm = this;
                        page_url = page_url || 'https://api.discogs.com/users/owlsays/collection/folders/0/releases?sort=artist'
                        this.$http.get(page_url)
                                .then(function (response) {
                                    vm.makePagination(response.data.pagination)
                                    vm.$set('releases', response.data.releases)
                                });
                    },
                    fetchLatestReleases: function (page_url) {
                        let vm = this;
                        page_url = page_url
                        this.$http.get(page_url || 'https://api.discogs.com/users/owlsays/collection/folders/0/releases?per_page=10&sort=added&sort_order=desc')
                                .then(function (response) {
                                    vm.$set('latestReleases', response.data.releases)
                                });
                    },
                    makePagination: function(data){
                        let pagination = {
                            current_page: data.page,
                            last_page: data.pages,
                            next_page_url: data.urls.next,
                            prev_page_url: data.urls.prev
                        }
                        this.$set('pagination', pagination)
                    }
                }
            });
        }

    </script>
@endsecton

