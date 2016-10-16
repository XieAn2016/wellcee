$(function(){
    var StatusBar = React.createClass({
        render: function(){
            return (
                <div id="status-bar" onClick={this.props.handleClick}>
                    <ul id="status-btn" className="clearfix">
                        <li className="current" data-status="0">全部</li>
                        <li data-status="1">待处理</li>
                        <li data-status="2">进行中</li>
                        <li data-status="3">成功交易</li>
                        <li data-status="4">无效交易</li>
                    </ul>
                </div>
            );
        }
    });
    var StatusApp = React.createClass({

        statusBtn: function(status){
            var statusArr =[];
            statusArr[1] = <div><div className="status-btn status-type1 status-accept">接受</div><div className="status-btn status-type2 status-decline">拒绝</div></div>
            statusArr[21] = <div className="status-btn status-type3">待房客入住</div>
            statusArr[22] = <div className="status-btn status-type3">房客入住中</div>
            statusArr[23] = <div className="status-btn status-type3">房客申诉中</div>
            statusArr[31] = <div><div className="status-btn status-type3">交易成功</div><div className="status-btn status-type1 status-comment">评价房客</div></div>
            statusArr[32] = <div><div className="status-btn status-type3">交易成功</div><div className="status-btn status-type3">已评价房客</div></div>
            statusArr[41] = <div className="status-btn status-type3">已拒绝预定</div>
            statusArr[42] = <div className="status-btn status-type3">超过处理时间</div>
            return( statusArr[status]);

        },
        handleClick: function(e){
            var orderId = this.props.orderId;
            var target = $(e.target);
            //console.log(orderId);

            if(target.hasClass("status-accept")){
                //console.log(1);
                $.get("book/owner_accept", {orderId: orderId}, function(data){
                    //console.log(target);

                    if(data == "success"){
                        this.setState({
                            status: this.statusBtn(21)
                        });
                        alert("success!!");
                    }else{
                        alert("fail???");
                    }
                }.bind(this), "text");
            }else if(target.hasClass("status-decline")){
                //console.log(2);
                $.get("book/owner_decline", {orderId: orderId}, function(data) {
                    //console.log(target);
                    if (data == "success") {
                        this.setState({
                            status: this.statusBtn(41)
                        });
                        alert("success!!");
                    } else {
                        alert("fail???");
                    }
                }.bind(this), "text");

            }else if(target.hasClass("status-comment")){
                //console.log(3);
                $.get("book/owner_comment", {orderId: orderId}, function(data) {
                    //console.log(target);
                    if (data == "success") {
                        this.setState({
                            status: this.statusBtn(32)
                        });
                        alert("success!!");
                    } else {
                        alert("fail???");
                    }
                }.bind(this), "text");
            }
        },

        getInitialState: function(){
            return ({
                status: this.statusBtn(this.props.status)
            })
        },
        componentWillReceiveProps: function(nextProps){
            this.setState({
                status: this.statusBtn(nextProps.status)
            })

        },

        render: function(){
            return (
                <div onClick={this.handleClick} style={{display: 'inline-block'}}>
                    {this.state.status}
                </div>
            );
        }

    });
    var DetailBtn = React.createClass({

        detailHandle: function(e){
            var detailDOM = ReactDOM.findDOMNode(this.refs.detailHandle);
            var detailIcon = $(detailDOM).children(".glyphicon");
            if(detailIcon.hasClass("glyphicon-chevron-down")){
                detailIcon.removeClass("glyphicon-chevron-down").addClass("glyphicon-chevron-up");
            }else{
                detailIcon.removeClass("glyphicon-chevron-up").addClass("glyphicon-chevron-down");
            }
            console.log(detailIcon.hasClass("glyphicon-chevron-down"));
            $(detailDOM).parents(".book-desc-content").siblings(".book-desc-content-hide").toggle(300, "swing");
        },

        render: function(){
            return (
                <div ref='detailHandle' className="detailBtn status-btn status-type2" onClick={this.detailHandle}>
                    详情 <span className="glyphicon glyphicon-chevron-down" aria-hidden="true"></span>
                </div>
            );
        }
    });
    //var BookUl = React.createClass({
    //
    //    render: function(){
    //        var ul = this.props.ul;
    //        var houseId = this.props.houseId;
    //        var liArr = [];
    //        ul.forEach(function(elem,index){
    //            liArr.push(<BookLi li={elem} key={index}/>);
    //        });
    //        return (
    //            <div className="clearfix booklist-ul row">
    //                <div className="house-img col-md-3">
    //                    <a href="" className=""><img src={ul[0].thumb_path} alt=""/></a>
    //                    <div className="house-title">{ul[0].title}</div>
    //                </div>
    //                <ul className="book-ul list-unstyled  col-md-9">
    //
    //                    {liArr}
    //                </ul>
    //            </div>
    //        );
    //    }
    //});
    //var BookLi = React.createClass({
    //    getLi: function(li){
    //        $.get("book/change_status_owner", {
    //            orderId: li.order_id,
    //            currOStatus: li.owner_status,
    //            currUStatus: li.user_status
    //        }, function(data){
    //            li = data;
    //            this.setState({
    //                li: li
    //            });
    //        }.bind(this), "json");
    //    },
    //
    //    componentDidMount: function(){
    //        //console.log("componentDidMount");
    //        var li = this.props.li;
    //        this.getLi(li);
    //    },
    //
    //    getInitialState: function(){
    //        return ({
    //            li: this.props.li
    //        });
    //    },
    //    componentWillReceiveProps: function(nextProps) {
    //        console.log("componentWillReceiveProps");
    //        console.log(nextProps.li);
    //        var li = nextProps.li;
    //        this.getLi(li);
    //    },
    //    render: function(){
    //        //console.log("render");
    //        //console.log(this.state.li);
    //        return (
    //            <li className="">
    //                <div className="book-info">
    //                    <span className="col-md-3">订单编号: {this.state.li.order_id}</span>
    //                    <span className="col-md-4 col-md-offset-5">预定时间: {this.state.li.order_date}</span>
    //                </div>
    //                <div className="book-desc row">
    //                    <div className="col-md-3">
    //                        <div className="user-img"><img src={this.state.li.thumb_img} alt=""/></div>
    //                        <p className="user-name">{this.state.li.last_name}{this.state.li.first_name}</p>
    //                    </div>
    //                    <div className="col-md-9">
    //                        <p>租房日期：{this.state.li.start_date} ~ {this.state.li.end_date}</p>
    //                        <p>入住人数：{this.state.li.checkin_num}人</p>
    //                        <p>联系电话：{this.state.li.tel}</p>
    //                        <p>房客留言：{this.state.li.message}不嗯日产量为恶奴不嗯日产量为恶奴不嗯日产量为恶奴不嗯日产量为恶奴不嗯日产量为恶奴不嗯日产量为恶奴不嗯日产量为恶奴不嗯日产量为恶奴不嗯日产量为恶奴不嗯日产量为恶奴不嗯日产量为恶奴不嗯日产量为恶奴</p>
    //                        <span>个人爱好：</span>
    //                        <HobbyApp userId={this.state.li.owner_id}/>
    //                        <div className="book-status">
    //                            <StatusApp orderId={this.state.li.order_id} status={this.state.li.owner_status}/>
    //                        </div>
    //                    </div>
    //                </div>
    //            </li>
    //        );
    //    }
    //});

    var HobbyApp = React.createClass({
        getInitialState: function(){
            return ({
                user: this.props.userId,
                hobbyUl: []
            })
        },
        render: function(){
            return (
                <ul user={this.props.userId} className="user-hobby clearfix">{this.state.hobbyUl}</ul>
            );
        },
        componentDidMount: function(){
            $.get("book/get_user_hobby", {userId: this.state.user}, function(data){
                //console.log(data);
                var hobbyArr = [];
                data.forEach(function(elem, index){
                    //console.log(elem);
                    hobbyArr.push(<li key={index}><i className={"iconfont-hobby "+elem.hobby_class}></i><span>{elem.hobby_name}</span></li>)
                });
                this.setState({
                    hobbyUl: hobbyArr
                })
            }.bind(this), "json");
        }

    });

    var JourneyLi = React.createClass({
        getInitialState: function(){
            return ({
                li: this.props.li
            });
        },
        //getLi: function(li){
        //    $.get("book/change_status_owner", {
        //        orderId: li.order_id,
        //        currOStatus: li.owner_status,
        //        currUStatus: li.user_status
        //    }, function(data){
        //        li = data;
        //        this.setState({
        //            li: li
        //        });
        //    }.bind(this), "json");
        //},
        componentWillReceiveProps: function(nextProps) {
            console.log("componentWillReceiveProps");
            console.log(nextProps.li);
            //var li = nextProps.li;
            //this.getLi(li);
        },
        componentDidMount: function(){
            console.log("componentDidMount");
            //var li = this.props.li;
            //this.getLi(li);
        },
        handleClick: function(e){
            console.log($(e.target));
        },

        render: function(){
            return (
                <li className="clearfix book-li">
                    <div className="house-img col-md-3">
                        <a href="" className=""><img src={this.state.li.thumb_path} alt=""/></a>
                    </div>
                    <div className="book-ul list-unstyled  col-md-9">
                        <div className="book-info">
                            <span className="col-md-3">订单编号: {this.state.li.order_id}</span>
                            <span className="col-md-4 col-md-offset-5">预定时间: {this.state.li.order_date}</span>
                        </div>
                        <div className="book-desc row">

                            <div className="book-desc-content" >
                                <p className="col-md-12 ">
                                    <span className="col-md-9 house-title">{this.state.li.title}</span>
                                    <span className="col-md-3 house-price">合计：<span style={{color: '#6fbb30', fontSize: 20+'px'}} >¥{this.state.li.price}</span></span>
                                </p>
                                <p className=" col-md-11 ">房东姓名：{this.state.li.first_name}{this.state.li.last_name}</p>
                                <p className=" col-md-11 ">租房日期：{this.state.li.start_date} ~ {this.state.li.end_date}</p>
                                <p className=" col-md-11 ">房屋地址：{this.state.li.city}{this.state.li.street}{this.state.li.road}{this.state.li.address}</p>
                                <div className="book-status">
                                    <DetailBtn />
                                    <StatusApp orderId={this.state.li.order_id} status={this.state.li.owner_status}/>
                                </div>
                            </div>

                            <div className="col-md-12 book-desc-content-hide" style={{display: "none"}}>
                                <p>房源描述：{this.state.li.intro}</p>
                                <p>房源评分：{this.state.li.score}</p>
                                <p>房东电话：{this.state.li.tel}</p>
                                <span>房东爱好：</span>
                                <HobbyApp userId={this.state.li.owner_id}/>
                            </div>
                        </div>
                    </div>
                </li>
            );
        }
    });

    var Journey = React.createClass({

        getInitialState: function(){
            return({
                journeyList: ''
            });
        },

        render: function(){
            return (
                <div id="journey">
                    <StatusBar handleClick={this.handleClick}/>
                    <ul id="journey-list">
                        {this.state.journeyList}
                    </ul>
                </div>

            );
        },

        componentDidUpdate: function(){
            console.log("componentDidUpdate");
        },

        componentDidMount: function(){
            console.log("componentDidMount");
            $.get("book/get_journey", {}, function(data){
                //this.changeStatus(data);
                var jourArr = [];
                data.forEach(function(elem, index) {
                    console.log(elem);
                    jourArr.push(<JourneyLi li={elem} key={index}/>);
                });

                this.setState({
                    journeyList: jourArr
                });
            }.bind(this), "json");
        },

        handleClick: function(e){
            var status = $(e.target).data("status");
            console.log($(e.target));
            $(e.target).addClass("current").siblings().removeClass("current");
            $.get("book/get_booklist", {status: status}, function(data){
                this.changeStatus(data);
            }.bind(this), "json");
        }

    });


    ReactDOM.render(<Journey />, document.getElementById("container"));

    //$(".detailBtn").on("click", function(){
    //    console.log("yy");
    //});


});