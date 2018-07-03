# git   Feng还未编辑完

### git下载后配置
### t的ssh key，这样就不用每次提交到git库需要输入密码
### 随后一直按回车就好了。会在你的Administrator/.ssh中生成
### 复制id-rsa.pub里的秘钥
> ssh-keygen -t rsa -C '你的注册账号'

### 将本地的文件添加到缓存区
* "."符号为所有的文件
> git add .
* "demo.html"也可以输入指定文件
> git add 'demo.html'

### 随后把当前的改动提交到版本里，并写好注释
> git commit -m '我是注释'

### 再与线上的git文件进行合并
### origin 之后的master。是分支参数，主分支是master。
### 一般先在develop分支中进行修改，master一直保持是可用的版本。
### develop分支测试通过后，再合并到master分支。
> git pull origin master

### 将本地文件提交到线上git库中
> git push origin master

### 更新远程库，撤回某一个指定版本
> git log 查看历史的版本

###--hard是指本地代码也会回到某个对应的版本 --soft是指本地代码不会回到某个对应版本，但是版本号会回到对应版本
###回到过去的指定版本 
> git reset --hard +版本号 

###强制更新线上版本为本地的版本号
> git push origin master --force 

### 切换分支，加上-b指令，表示创建并切换到这个分支
> git checkout -b develop
> git checkout develop

###将git add进本地缓冲区的文件释放出来，此方法只针对不是新文件类型的文件
> git checkout "demo.html"

### 本地分支列表
> git branch

### git add 后想要撤销
> git reset HEAD

### .gitignore 标识忽略项目中的指定文件或者文件夹


