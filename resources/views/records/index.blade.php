@extends('layouts.main')

@section('content')

    <div class="container text-center">
        <h1 class="page-header">Adam's Records</h1>

        {{--@include('partials.search',['url'=>'record'])--}}

        @if(Auth::check())
            <p>
                <a href="/record/create" class="btn btn-default" role="button">Add New Record</a>
            </p>
        @endif

        <br><br>
        <div class="row">
            <div class="releases col-md-12">
                <h3 class="page-header">Adam's Collection</h3>
                <template v-for="release in releases">
                    <ul>
                        <li class="lead list-unstyled text-left">
                            <a href="/record/@{{ release.id }}">
                                @{{ release.basic_information.artists[0].name }} - @{{ release.basic_information.title }}
                            </a>
                        </li>
                    </ul>
                </template>
            </div>
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
                el: '.releases',
                data: {
                    releases: [],
                    pagination: {}
                },
                ready: function () {
                    this.fetchReleases()
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
                        console.log(this.$http.get(page_url))
                    },
                    makePagination: function(data){
                        let pagination = {
                            current_page: data.page,
                            last_page: data.pages,
                            next_page_url: data.urls.next,
                            prev_page_url: data.urls.prev
                        }
                        console.log(pagination);
                        this.$set('pagination', pagination)
                    }
                }
            });
        }

    </script>
@endsecton

