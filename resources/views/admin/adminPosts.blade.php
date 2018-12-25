@extends('admin.layoutAdmin')
@section('pageName',$pageName)
@section('title',$title)

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="with_border with_padding">

                <div class="row admin-table-filters">
                    <div class="col-lg-9">

                        <form action="./" class="form-inline filters-form">
											<span>
												<label class="grey" for="with-selected">With Selected:</label>
												<select class="form-control with-selected" name="with-selected" id="with-selected">
													<option value="">-</option>
													<option value="approve">Approve</option>
													<option value="publish">Publish</option>
													<option value="delete">Delete</option>
												</select>
											</span>
                            <span>
												<label class="grey" for="orderby">Sort By:</label>
												<select class="form-control orderby" name="orderby" id="orderby">
													<option value="date" selected>Date</option>
													<option value="author">Author</option>
													<option value="title">Title</option>
													<option value="status">Status</option>
												</select>
											</span>

                            <span>
												<label class="grey" for="showcount">Show:</label>
												<select class="form-control showcount" name="showcount" id="showcount">
													<option value="10" selected>10</option>
													<option value="20">20</option>
													<option value="30">30</option>
													<option value="50">50</option>
													<option value="100">100</option>
												</select>
											</span>
                        </form>

                    </div>
                    <!-- .col-* -->
                    <div class="col-lg-3 text-lg-right">
                        <div class="widget widget_search">

                            <form method="get" class="searchform" action="./">
                                <!-- <div class="form-group-wrap"> -->
                                <div class="form-group">
                                    <label class="sr-only" for="widget-search">Search for:</label>
                                    <input id="widget-search" type="text" value="" name="search" class="form-control" placeholder="Search Keyword">
                                </div>
                                <button type="submit" class="theme_button color1">Search</button>
                                <!-- </div> -->
                            </form>
                        </div>

                    </div>
                    <!-- .col-* -->
                </div>
                <!-- .row -->


                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <tr>
                            <td class="media-middle text-center">
                                <input type="checkbox">
                            </td>
                            <th>Title:</th>
                            <th>Author:</th>
                            <th>Date:</th>
                            <th>Categories:</th>
                            <th>Status:</th>
                        </tr>
                        <tr class="item-editable">
                            <td class="media-middle text-center">
                                <input type="checkbox">
                            </td>
                            <td class="media-middle">
                                <h5>
                                    <a href="admin_post.html">
                                        Consectetur adipisicing elit
                                    </a>
                                </h5>
                            </td>
                            <td>
                                <div class="media">
                                    <div class="media-left">
                                        <img src="images/team/01.jpg" alt="...">
                                    </div>
                                    <div class="media-body">
                                        <h5>
                                            <a href="admin_profile.html">Alex Walker</a>
                                        </h5>
                                        &lt;email@example.com&gt;
                                    </div>
                                </div>
                            </td>
                            <td class="media-middle">
                                <time datetime="2017-02-08T20:25:23+00:00" class="entry-date">08.02.2017 at 20:25</time>
                            </td>
                            <td class="media-middle">
                                uncategorized, category1
                            </td>
                            <td class="media-middle">
                                Published
                            </td>
                        </tr>
                        <tr class="item-editable">
                            <td class="media-middle text-center">
                                <input type="checkbox">
                            </td>
                            <td class="media-middle">
                                <h5>
                                    <a href="admin_post.html">
                                        Inventore accusamus illo
                                    </a>
                                </h5>
                            </td>
                            <td>
                                <div class="media">
                                    <div class="media-left">
                                        <img src="images/team/02.jpg" alt="...">
                                    </div>
                                    <div class="media-body">
                                        <h5>
                                            <a href="admin_profile.html">Janet C. Donnalds</a>
                                        </h5>
                                        &lt;newemail@example.com&gt;
                                    </div>
                                </div>
                            </td>
                            <td class="media-middle">
                                <time datetime="2017-02-08T20:25:23+00:00" class="entry-date">08.02.2017 at 20:25</time>
                            </td>
                            <td class="media-middle">
                                category name, new category
                            </td>
                            <td class="media-middle">
                                Published
                            </td>
                        </tr>
                        <tr class="item-editable">
                            <td class="media-middle text-center">
                                <input type="checkbox">
                            </td>
                            <td class="media-middle">
                                <h5>
                                    <a href="admin_post.html">
                                        Cadipisicing elit
                                    </a>
                                </h5>
                            </td>
                            <td>
                                <div class="media">
                                    <div class="media-left">
                                        <img src="images/team/03.jpg" alt="...">
                                    </div>
                                    <div class="media-body">
                                        <h5>
                                            <a href="admin_profile.html">Victoria Grow</a>
                                        </h5>
                                        &lt;anotheremail@example.com&gt;
                                    </div>
                                </div>
                            </td>
                            <td class="media-middle">
                                <time datetime="2017-02-08T20:25:23+00:00" class="entry-date">08.02.2017 at 20:25</time>
                            </td>
                            <td class="media-middle">
                                categ1, categ2, categ3
                            </td>
                            <td class="media-middle">
                                Review
                            </td>

                        </tr>
                        <tr class="item-editable">
                            <td class="media-middle text-center">
                                <input type="checkbox">
                            </td>
                            <td class="media-middle">
                                <h5>
                                    <a href="admin_post.html">
                                        Consectetur adipisicing elit
                                    </a>
                                </h5>
                            </td>
                            <td>
                                <div class="media">
                                    <div class="media-left">
                                        <img src="images/team/01.jpg" alt="...">
                                    </div>
                                    <div class="media-body">
                                        <h5>
                                            <a href="admin_profile.html">Alex Walker</a>
                                        </h5>
                                        &lt;email@example.com&gt;
                                    </div>
                                </div>
                            </td>
                            <td class="media-middle">
                                <time datetime="2017-02-08T20:25:23+00:00" class="entry-date">08.02.2017 at 20:25</time>
                            </td>
                            <td class="media-middle">
                                uncategorized, category1
                            </td>
                            <td class="media-middle">
                                Published
                            </td>
                        </tr>
                        <tr class="item-editable">
                            <td class="media-middle text-center">
                                <input type="checkbox">
                            </td>
                            <td class="media-middle">
                                <h5>
                                    <a href="admin_post.html">
                                        Inventore accusamus illo
                                    </a>
                                </h5>
                            </td>
                            <td>
                                <div class="media">
                                    <div class="media-left">
                                        <img src="images/team/02.jpg" alt="...">
                                    </div>
                                    <div class="media-body">
                                        <h5>
                                            <a href="admin_profile.html">Janet C. Donnalds</a>
                                        </h5>
                                        &lt;newemail@example.com&gt;
                                    </div>
                                </div>
                            </td>
                            <td class="media-middle">
                                <time datetime="2017-02-08T20:25:23+00:00" class="entry-date">08.02.2017 at 20:25</time>
                            </td>
                            <td class="media-middle">
                                category name, new category
                            </td>
                            <td class="media-middle">
                                Draft
                            </td>
                        </tr>
                        <tr class="item-editable">
                            <td class="media-middle text-center">
                                <input type="checkbox">
                            </td>
                            <td class="media-middle">
                                <h5>
                                    <a href="admin_post.html">
                                        Cadipisicing elit
                                    </a>
                                </h5>
                            </td>
                            <td>
                                <div class="media">
                                    <div class="media-left">
                                        <img src="images/team/03.jpg" alt="...">
                                    </div>
                                    <div class="media-body">
                                        <h5>
                                            <a href="admin_profile.html">Victoria Grow</a>
                                        </h5>
                                        &lt;anotheremail@example.com&gt;
                                    </div>
                                </div>
                            </td>
                            <td class="media-middle">
                                <time datetime="2017-02-08T20:25:23+00:00" class="entry-date">08.02.2017 at 20:25</time>
                            </td>
                            <td class="media-middle">
                                categ1, categ2, categ3
                            </td>
                            <td class="media-middle">
                                Published
                            </td>

                        </tr>
                    </table>
                </div>
                <!-- .table-responsive -->
            </div>
            <!-- .with_border -->
        </div>
        <!-- .col-* -->
    </div>
@endsection