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
                    <div onClick={this.handleClick}>
                        {this.state.status}
                    </div>
                );
        }

    });

    var BookUl = React.createClass({

        render: function(){
            var ul = this.props.ul;
            var houseId = this.props.houseId;
            var liArr = [];
            ul.forEach(function(elem,index){
                liArr.push(<BookLi li={elem} key={index}/>);
            });
            return (
                <div className="clearfix booklist-ul row">
                        <div className="house-img col-md-3">
                            <a href="" className=""><img src={ul[0].thumb_path} alt=""/></a>
                            <div className="house-title">{ul[0].title}</div>
                        </div>
                    <ul className="book-ul list-unstyled  col-md-9">

                        {liArr}
                    </ul>
                </div>
            );
        }
    });
    var BookLi = React.createClass({
        getLi: function(li){
            $.get("book/change_status_owner", {
                orderId: li.order_id,
                currOStatus: li.owner_status,
                currUStatus: li.user_status
            }, function(data){
                li = data;
                this.setState({
                    li: li
                });
            }.bind(this), "json");
        },

        componentDidMount: function(){
            //console.log("componentDidMount");
            var li = this.props.li;
            this.getLi(li);
        },

        getInitialState: function(){
            return ({
                li: this.props.li
            });
        },
        componentWillReceiveProps: function(nextProps) {
            console.log("componentWillReceiveProps");
            console.log(nextProps.li);
            var li = nextProps.li;
            this.getLi(li);
        },
        render: function(){
            //console.log("render");
            //console.log(this.state.li);
            return (
                <li className="">
                    <div className="book-info">
                        <span className="col-md-3">订单编号: {this.state.li.order_id}</span>
                        <span className="col-md-4 col-md-offset-5">预定时间: {this.state.li.order_date}</span>
                    </div>
                    <div className="book-desc row">
                        <div className="col-md-3">
                            <div className="user-img"><img src={this.state.li.thumb_img} alt=""/></div>
                            <p className="user-name">{this.state.li.last_name}{this.state.li.first_name}</p>
                        </div>
                        <div className="col-md-9">
                            <p>租房日期：{this.state.li.start_date} ~ {this.state.li.end_date}</p>
                            <p>入住人数：{this.state.li.checkin_num}人</p>
                            <p>联系电话：{this.state.li.tel}</p>
                            <p>房客留言：{this.state.li.message}不嗯日产量为恶奴不嗯日产量为恶奴不嗯日产量为恶奴不嗯日产量为恶奴不嗯日产量为恶奴不嗯日产量为恶奴不嗯日产量为恶奴不嗯日产量为恶奴不嗯日产量为恶奴不嗯日产量为恶奴不嗯日产量为恶奴不嗯日产量为恶奴</p>
                            <span>个人爱好：</span>
                            <HobbyApp key={this.state.li.order_id} userId={this.state.li.user_id}/>
                            <div className="book-status">
                                <StatusApp orderId={this.state.li.order_id} status={this.state.li.owner_status}/>
                            </div>
                        </div>
                    </div>
                </li>
            );
        }
    });

    var HobbyApp = React.createClass({
        getInitialState: function(){
            return ({
                user: this.props.userId,
                hobbyUl: []
            })
        },
        render: function(){
            //var user = this.props.userId;
            //console.log(this.props.userId);
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

    var Books = React.createClass({

        getInitialState: function(){
            return({
                BookUl: ''
            });
        },

        render: function(){
            return (
                <div>
                    <StatusBar handleClick={this.handleClick}/>
                    <div id="booklist">
                        {this.state.BookUl}
                    </div>
                </div>

            );
        },

        changeStatus: function(data){
            var bookUl = [];
            var ul = [];
            var houseId;
            data.forEach(function(elem, index){
                if(houseId != elem.house_id){
                    bookUl[elem.house_id] = [];
                }
                bookUl[elem.house_id].push(elem);
                houseId = elem.house_id;
            });
            bookUl.forEach(function(elem, index){
                ul.push(<BookUl key={index} ul={elem} houseId={index}/>);
            });
            this.setState({
                BookUl: ul
            });
        },

        componentDidMount: function(){
            $.get("book/get_booklist", {}, function(data){
                this.changeStatus(data);
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


     ReactDOM.render(<Books />, document.getElementById("book"));










});