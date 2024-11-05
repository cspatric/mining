@extends($activeTemplate . 'layouts.master')
@section('content')

<link rel="stylesheet" href="{{asset ('css/share.css')}}">
<body class="uni-body pages-stock-stock"><noscript><strong>Please enable JavaScript to continue.</strong></noscript>
    <uni-app class="uni-app--maxwidth">
        <uni-page data-page="pages/stock/stock">
            <!---->
            <uni-page-refresh>
                <div class="uni-page-refresh" style="margin-top: 0px;">
                    <div class="uni-page-refresh-inner"><svg fill="#333333" width="24" height="24" viewBox="0 0 24 24" class="uni-page-refresh__icon"><path d="M17.65 6.35C16.2 4.9 14.21 4 12 4c-4.42 0-7.99 3.58-7.99 8s3.57 8 7.99 8c3.73 0 6.84-2.55 7.73-6h-2.08c-.82 2.33-3.04 4-5.65 4-3.31 0-6-2.69-6-6s2.69-6 6-6c1.66 0 3.14.69 4.22 1.78L13 11h7V4l-2.35 2.35z"></path><path d="M0 0h24v24H0z" fill="none"></path></svg>
                        <svg
                            width="24" height="24" viewBox="25 25 50 50" class="uni-page-refresh__spinner">
                            <circle stroke="#333333" cx="50" cy="50" r="20" fill="none" stroke-width="4" stroke-miterlimit="10" class="uni-page-refresh__path"></circle>
                            </svg>
                    </div>
                </div>
            </uni-page-refresh>
            <uni-page-wrapper>
                <uni-page-body>
                    <uni-view data-v-696bb61f="" class="container" style="padding-bottom: 60px;">
                        <uni-view data-v-c4b04b80="" data-v-7edaee84="" data-v-696bb61f="" class="u-navbar" z-index="100" title="Share option">
                            <uni-view data-v-c4b04b80="" class="u-navbar__placeholder" style="height: 44px;"></uni-view>
                            <uni-view data-v-c4b04b80="" class="u-navbar--fixed">
                                <uni-view data-v-ba701168="" data-v-c4b04b80="" class="u-status-bar" style="height: 0px; background-color: rgb(255, 255, 255);"></uni-view>
                                <uni-view data-v-c4b04b80="" class="u-navbar__content" style="height: 44px; background-color: rgb(255, 255, 255);">
                                    <uni-view data-v-c4b04b80="" class="u-navbar__content__left">
                                        <uni-view data-v-7edaee84="" class="navi-left">
                                            <uni-view data-v-7edaee84="" class="info">
                                                <uni-image data-v-7edaee84="" class="info-icon">
                                                    <div style="background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAASAAAAEgCAYAAAAUg66AAAAAAXNSR0IArs4c6QAAIABJREFUeF7tvfmbJFd5Jvp+JyKrsrbeu3pvLY1AMhIgLBAgEGCxascsHo8fj409tp+xx9czvnPvPzC/ztxr7GvfZ8DYnmvPPDaLkdRaBwktICEJGQmpBQKp1a1eqqur964tqzLjfFfviYiq7FJ3Vy4RuVSegFR1d0WcOPGdE29+6/sJ/NH1ElBVA8C89hqCYhGmUIAJguNmZqYQ6mChWJiPVmkQrjXGrrGRrhIxwyq6RiAjorraQocAGYTKgBEdUKAISBGiRSj6AfQBCBNBCQQhFH0QFNy/KcoQzENRcX+LD/55HoI5qJQALQlQsiqzEJ0FdMZAplXkjEInReW0qp0ygZy11pyWqHKq3BeclZlyaXCwXImiDbZchi2VYM+8DfaXgUhEbNcvXo8/gPT483f946tqePz48YEoKg5YGw6olos2MH2hSlE1KiI0QzbSESNmjRVdJVZHABlS/hkyDGAEwBCgA1CCDooK7RcIgaeYgA+BZhGAgOACgouWAFDZgRBQUuicQOagKEG0BMgsgGkAkwqdEpWzgE6rkUmjctaqPW0CmUTFTosEpYpoyUR2XqRQCoKoZMzszIYNG2ZFhEDnjy6VgAegLl04VZX9p0+v7psJNonIJisYhTEboNhgVNeowXqorgaEnyKgqSZTEEhBoQUBCrqo3RBgAgECjQGGWlWWhxUgUoAgxQ+BoyLAvAJlgZQVSsBKQEvmqDUBegYiZ8TihBU5DcFxWHvCKI6q6tH5wejopWvWnBGRVPPKcs5+rJwl4AEoZwE3OzyB5vjx48PTGBwOtDIsCIZE7aDaYK0xutYCmyT+jBJ8AGxQwRoo1guwWpGYSc1OpE3XC1BW4AwEJ0RxGsBxKE6owVEFjhrgqLVySkx0SsXMKKLpSMKpIcxMbdiwYcoDU5sWrsbbegCqUVDtOO3VV7V/ZKS01drydgRmp1psh8g2QEcBbBRgSIFBQAacCRWbTPxQ20lNpnZMPY97UmOaozkX/5QZQGcFmNHYlDsGyARUD4vBIUT2gDGFQ5OTxbErrqA25Y9OlIAHoA5ZlX37tDgwMLWqbOwqg3DERHYVzShVbIPIdih2QmU7RLcBshFQ+m/8sSABmQL0GFQOQ/QQBAegekgEh535FpizFpXJgjVnZ2eHz152GR3j/mi3BDwAtXsFAOw7dWpNoVy41KjuUiu7YGQn1FLbWQelk5jOYgc4QwD406/b+deNfqCp2LntAGkKgkmonoSYQ7B6QIzutSJ7y4Xy/svWrqVJ5482SsBv5BYLX1WDQ4fOru7r619TlsoqWKw3gs1W5TIR3QVgF7UdAbZ2u/+mxaK94O0SP9KY04qAvaqy14jus4pxGJwoaHh2fn7u9Pbtq+jMpoPcHy2SgAegFgmat3lOtbDp2NlLwii8IhK9UiCXA3oJoBsAWQNgVfLxWk7265JqR2cBMOR/GpDjgLyh0NcDlVcqQeW1oxtX7b9OhJE4f7RAAh6AchQyEwQPH55cq326NqiEDI1vEeguFbkCqlcCuBzA9hXoMM5RqpkOTcf2IQCvQ+QVVX1NIK+JxZEorJyWeTm1bdvIKZ/wmKnMzxnMA1BOsmUEa9WquW1lG10l0HdC8A4AO8BwObAawNpE2/FrkNMa1DgsNSNqRfQHnQFwFMBBKH6ukJcLJvjZ2bP9h30krUZp1nma3/x1Cuxip4+N6aDq7Hot2PViZQdgLxXFL6mRd0IdABF8/NH5EpiA4Odi9WUV/BQw+9XoQSmbEyIDJ7ZuZQqAP7KQgAegLKQI4I03Tq/t6yu8zQrepdBrhIAj2JxoOuuSkoeM7uaHaYEEJgGcBHAKinElIEFeMooX5+fLr11yyZpTLZjDir+FB6AmlvjYsWMj1o5sLKsdNbCXqypB512AuRrQS71vpwnhdtalFUD2A3YPFC+KyM8tzOsFMRPGTB7buHEjwcofDUjAA1ADQuMlR45MbrSBvkOsuU6BayC4AoqNANYDoMZzoYLNBu/oL2uzBBiep0Z0AoJjULwqwEtq7HMmkp9v2TJyrM3z68rbewCqY9no4xEpjUaim43YKxSgb+c68CecueWP3pHAOICXIXhOgJetmlcDlXHV4oT3EdW+CTwA1SirvSdPrh6c63+7hX0fBO+ByJVQBzppVKvGkfxpK0gCjJrRYT0O1VegeMHA/Gimf+4Xu9at4+/8sYwEPABdRECsRD96dGpjRWQLrF4hwDVq5H38CXX5O/7wEoglIDikwEti9Uf8CSOvhqpHNm0aPuYr8i+8STwAXUA2BJ/x8dIlESrXiZH3QfEeADsTjYc+Hn94CSyVAH1EEwAOQPCCWv1RgPC5zZuLb3gQOv9m8QC0RC6pn6eCyqUGeCfBRxXXCfB2X5vlEacWCSS1Z78QwXMEIQu8HCLc7/1Db5WeB6AqmYyP61BZZ99pJLoekOsBsFyCfh5Gt8iL7A8vgVolQCpaRsborH4F0GesBs8UZODlzZuF/EX+8LQO8R6YmJgYnkP/FonCtwvs+yHyAQDvJbug3yVeAhlI4DiAH0P1aYV5VoPKL/oxd2R0dJTUIT199LwGdOLEiVWlSuEaqPmIqrxPRK+EYAvU1Wr5w0sgGwmIy6g+oiqviOiPIPb7xbD80vr161mH1rNHzwIQgWdurrAVQXClqtLk+gigVyeFoj27IfyD5y6BM4DsAfT7IvIMouiV/v7yWK8CUU8CEHN6+uYK1wZiPqRQmltXArLF05zm/vL5GzgJOLbGI/QNCeTpSO1T8/3l53sxd6inAOjgQR3QvjNbAy1cDdUPQ+RDAGu3PL+yR4Z2SIBAhBeh+hREfhBJeU80s/pwL/FV9wwAkZ9naGjmnTbQj8HKDSJ6jdd62vHS+XueK4FYG1KVl2D0SRF5dObM4E97hX9oxQMQO4cePD4zaiJ7JcTcIKofd6UU3snskaCTJBA7qV9QyPcA+5QNzCs7NgxOrPTOrysagEgAf/j45C5jDXN6bmJCYcJKSO5lf3gJdJoEzipwwAj+BcAj1thntm0Y2buSifJXLAAdPHhmXRCEl6nYD0DkRgA3ANjWaTvOz8dL4DwSOAzgSag+IWqejqLKvh07VrPMY8UdKxKAHPj0B++3FjeK4MNQvB3AphW3ev6BVrIEjkLwC1X8wBg8Ec1Fz65EEFpRAMS2N1uPlLYisNeq4iaIfgjquHrYqtgfXgLdJoE5CF6GylMieESseeHw5uLhldQ2aEUB0OHDZ98BIzeJMR+H4lqFbgXAnun+8BLoVgnMCoRNFZ9Xax+F1Ue2bVv18259mKXzXhEA5IpIZXqXsXqjGrlZYmczC0j94SWwUiRwXAU/Eqv3WyNPFHRo70ooau16ANq3T4vhwOy7jUY3wwg1H5pcnq9npbx2/jmqJXDSmWRWH7US3F+ZHfhJtyctdjUAsRVOoRBco4KbVOSz4rKavb/Hv7MrWgJzCrwoqg+I4pEosnu62TndtQA0NnZ2A0JznarcqqoflbjN8eCK3nr+4bwEYgnMKPC6iDxuLO4D7HPd2pWj6wCIVKnHjk1vKlshOfynYfWTEBdm94eXQG9JQPELGHkYiocKRp/duHHoaLdRv3YdAB08PrMtiKLrYeUOFTDBkOTwYW/tPP+0XgJOAhUAh0TxBIzeEwXB0zs2DDKJsWuOrgEgllWMjc1uUxN9QEQ+zdIKAJd0jaT9RL0E8pPAGyzdUNWHxAZPb906cLhbyje6AoBU1YyPl3aqiW5Qxe0QMMGQOT4mvzX1I3sJdI0ELARjUDBh8R6xwZObNxcPiIjt9CfoeACi5nPkSGk7guhGVVDz+Ziv6er0beXn1yYJ0Px6TAQPIQqe2LKlSE2IZlrHHh0NQNWaj7XyORH9IIAtnky/Y/eTn1h7JaCA453+oTF6l9HgyU2bnCbEvvYdeXQsADHaNTY2u11CS82HOT6/ojH4+MNLwEvgIhIQghDwqAge0Ip5YuvWgUOdao51LAAx2iXl6AYR+TyAD3vNx79zXgI1S0AFGFfg+6r6bS0ET3ZqdKwjAWhiYmpzRfUGVbkFwCcSErGape9P9BLwEnASOPjml/fDInpfKPLk6OgwmyR21NFxAHTkyORGK+YDqvpFMWBtl492ddSW8ZPpIgm46JhYfE9FvmXUPt1pGdMdBUBslzNQ7vuAQm5TtZ8VCMsr/OEl4CXQhAQEsleBB0T03tnC/NOd1P6nYwCIVe19Q5PXwZovAvgsgMt8hnMTu85f6iWwKIEKFK9D8CCM/eb89MhznVJF3xEAxH5dYThztYW9BSJ3Ani33z1eAl4CmUvgJ1C9y8DcV6kM7tmxQ2Yzv0OdA3YEAB06OvVugdypqrcIwPbInsWwzoX0p3sJ1CCBWQX2iMh9Cr1r+6bhn9RwTa6ntBWAyOG86djZS401n4GaL0GUTIbFXJ/YD+4l0NsSKEHlOYj9hjX2waMbV+1vJ8d0WwFofHz2skgrnwXkNgiY5by6t/eGf3ovgZZI4AwUPwR0dyDhA5s3D+xryV3Pc5O2ABCznA8fnlxnCuGN1upviChpNTyHc7t2gb9vL0rgmKo8YYz8D1uuPLFt28jJdnAJtQWA0r5dauVmAW5W6K5e3AH+mb0E2imBJDx/vxi9v119x1oOQK++qv1DQzNXq9EvvNn98ZMArvJUqu3chv7ePSyBGQA/e7Nr8HfFyrfn5gb3tDo831IA2rNH+9atm9qlgl+BkV+D4r0Ahnp4A/hH9xJotwSmIfgxrP6TKL538uTw3quvlvlWTaqlALT/2PSWkBzOVu4QURaYjrbqQf19vAS8BC4ogQlV+T5pXStGvnvpxqEjrZJVywBobEwHrZn+oFH8GyWZfOx09oyGrVppfx8vgQtLgMyJEyQys4q/N3boh1u3Cs2z3I+WABBNr7WjM+8E6VRVfy3x++T+cP4GXgJeAnVJ4KcQ+QYE95yaGHy5FaZYSwDowNHTuwzCOwS4E4r3+WTDujaFP9lLoFUSmIXgOQXusqjcvXPTmr153zhXACKl6qFDZ9cEfeGNqvbfAPJR3zY57yX143sJNCWBk4A+LmL+v3Kp/PjOnavP5MmmmCsAsXVy0B9ca1RuUZHbAX1bU6LxF3sJeAm0QgKviuIeC72vXKw8f9natafzummuADQ2dvZKa4LPM9kQ0GsAjOT1IH5cLwEvgcwkcBaQPQLcp1H07W3bVv08s5GXDJQbAFH7KRT7PqZqvwyApteqvB7Cj+sl4CWQqQTYXWMSAE2xvy2X5h+75JI1pzK9QzJYLgDEbOeBVbPvFdg7ReXzvtQij6XLZ0zl1jvvccFf1PSdJrnstHxk4EeNJeBKNUS/rTB3zZ4d+PEVV8hc1rLJZVsw6hXY8AsQvROQawH0Zz1xP16+EnBwUyvmXGgqwk3sjy6WwBygz0PlrshUvpVHVCzT/cGo18mTJ4dny8UbBfZ3APk4gDVdvAArcuqLWo46jOEmEP6X/xcBtRW3MZL/VGsvCxsm/UMCUudglRK73H9iDFPAanwvnKNixYN47aijt9lpQB9VmL8ZKJSeWLdu3VSWUbFMAejEiROrZisD7zQ2+qyKkNv5yo4WbQ9PrhoHCACGHyMwxsCYKiAiIPHvMUQtAlOKGikAJQMSZvhHJeDYBHgsEKlFZON/W3rvHl6Gbnn0V0T1m9YEDwyEsy+vX7/+bFYTzxSAxsZmL1FTuR1gyN0Vmq7LaqJ+nMYksNSnQ6ARQy1HHOg4jccAQfrTGPd7k2pC7pzkvHQKyd/PUWhSAEo0HQdCCwCkqKiF5d8jApTCpiDlzov/HutLXitqbKVzveokgB8Deo/Y8J6tWwfeyOpumQFQ3Md96iNW5PeSrhY0vXytV1Yr1cQ4KQhRwwkCQRjwp0EYGAQBtZ/Y7OJ/YvMrMccSMyy2xBJguMA8FkywBU0oxpP4r9WAow6IokgRRbFWVEn+zH/3JlkTC53fpVwZ5gI9aFW/tn3z8A9EpJLF7TIBIFUNjxwpbVOp3AYjX05oNrKYnx+jTgmkL7yDkQWzKtZoAgJQmIJP/JP/1mofDDUgApADHpsAUcWikpho9BdZ/rnKsdTqOdYp9t44XfG8iP6dQbj70KbioSy4pDMBoKNHpzaVrd4oIncA+JSnV23vfuSLSz8OwSUMDQqFVNtJTavY7CIotesgttD0Sv1FMRARlCwqFYtyhSZbrC21cZrtEk+n3vc4ycsAvbtg5PEsWj03vQMdv/Ox6XdLhN+AuIaCpFf1nS1auIVSTSF2JtORHGs6NLUKYYAC/xwa5+/p5IOAQwAqVxSVSpSYZrE2VK0RdfhjdLKIm50b84D2iuJBDeQftm4cfKFZHummdyT5nSU0N0ns+yHJmO/p1ewy13l96r+lP8cBTiFAX2gcCMWAFDuRu+FwDurEeR1VFPNRhErZYr5sYwe2D9u3exnZzPApQL+mFX14+/ZVJ5qZUFO7khnPw8Mz71KxdyjMr/li02aWov5rqfmkESo6l6np9BViACoEjGbVP2YnXcEoWjmKnEZULhOI6DNKwvneP9S2pWKGtIV+Q9XcVZoa+EkzGdJNAdDhwzM7YKLb4nbK8kFAh9smlV68MX09ARCGAfr7DPrCACG1HobSm1rZzhFmqhG5aFnZYq4coVy2zlRLNb+V8qydI/XlZiJTgP6QbZ5hg93btg0eXO6KC/2+4W2qqsHho7PvE0S/CwgpVrcCCBqdiL+uNgk4rYdmSOJkLoQGfX0B+uhoDoMVAzznkwad1DTF5hMQYhifkbT08EBU2x7K4KwIwBigDymCr2/bNPAjEeG/1X00DEAu8gV8Wqz8noher0Ch7rv7C+qSwILJBWo9cXSrvz/299Dx3C1+nroeesnJadieWhCBaH5+EYQ8ADUj2fquFaCsKs+o0a8VgIc2bRo+Wt8I8dkNARAJ5jWcfK9E5k4VfB7ApY3c3F9TuwRSc4MOZSYQUuvpTzQfgk+vHS5aRpNsLsJc2bqkxupoYK/Jo03Pu18U34bau4GRf2mEyL6hnXvkyOylKtGdFrjzTdIicjwPtkkAPXHbRWdzrPkQePih+dWL4JMueuoXKs1HmJuPXP5QVTVHT+yNNj/kjAI/AnB3oMF3tmwZ2F/vfOoGIOf7mZh9v6hl2J2+ny2NalL1TrZXz08TCxfAp5/gE7harl4/GCmbr0SxJpSAEOsGvGhasjNUgHEVPKQwX902OvBsvb6gutdpfHxy1Ip8Sq38AUQ/QHdESx61B29SHWZndItaT7EvQFgwbc1i7rSlYOkGtR8CUKkUoRwlmlCnTXRlzieCyg/F6H8zqv9r8+aRiXoesy4A2rdPi8XizDUq9naF+Vc+76ceUdd/rgOgxOdD4KHD2Wk+XZ7fU78klr+CsipXIpSqNSFX7+FLOZaXXrNnyGsC+4+i5p5SafClevrL1wVAB4/PbDMV/TRg74DIR6BY2+zU/fVvlcAiKQVc9Xp/IcBAMXRRr172+Sy3V5gzxBoymmP0C9FJnWqRy13rf9+EBASnoPjBm+ynd9tQHtyxYfBwraPVBUCHJqbeA4vfEtZ8qYt8earVWiVdx3lpZktg4KJdxb4QxX5qPnUtVx13XDmnOk2oHGGWIDRXcQWuHoRyX985KN5QwQMw+Lvto8Mv1HrHmne0C72bmU9A9d9BXJcLX/NVq5TrPC/VgPr6jNN8CEDUhPxRmwRYuMr8oNJ8xZlkBCHaYr2QJ1WbhHI5axaKJyDyV2IHH641JF/Trn5OtTA6cWZnqOGtCvwuAPb48kcOEki/rVnJXiyGsekVeqdPvaIm6NApPVOqYH4+ciyMHoDqlWLd578kwN9UpLJ7YnT1gVr4gmoCoEOHzq5HGHxQYEm3ektSdlH37PwFF5cAXxIGkBnxotO52B86E8xn+Dawc2iKRRazpUQLqsS1Y94ca0CWtV/C8oz7FOYeY6Ont25dRf6gix41AdDRo6XLK7byRYjclnQ49U0Gl5NsA78nAJE+g6AzWAxd2N1406sBScaXOFOsnETGaIolBGge0BsW6XIXuo6qUL2n1jY+NQHQwSMz7zfG/jsobgVc5MsXnS63FHX8fmmNF8PtBCAmHvqjOQnQFGNEbHa27ApZvQbUnDyXuZoFqacguNda8//u2DL47HJ3uygAke3wyBEMOOcz9I8B3OSTTJcTaf2/T2uYnN+nP873Ia9Pu6NescmS9PdKitGWdtlII3bnbKSFvmJxKx/+p530rwSemdmy8wnFDml/5CgBCvgRQP6CzugtWzB7MdbEiwKQa7G8ZvISWHOrKH7bO5/zWbb0W5nO5qHBgjO92h31cqyEKflXVXsd1++rqmlq7LdaZFx0VCEL7X4SDmpHHdIeAnzOLdWCGJZnblAKQt4Uy2c/A3hJBX8nFXvfzMzI/osRll0UgN544/Ra01f4YAB7m4pzPu/Ibco9PjC1HQIPAYjcPq0+HO9yVTNBvqT8t7iZ4OLvXOPB6ganS0rQ066qab8xIzEzY5g0PIybH8Y9yVpFIRInKKrLC2JYniAUg2arpdwz9zso0Putmt3RfPmpSy5Zc+pCT37RJRgfn72sItHnjOI2BX4ZwEjPiLAFD5oEvVxTwLBA84sJh6Ejk2/VwTm4qvKkE0VUIeVp0tGUgJSgTUoHkjRYXugb/xYTLJl6datnPkvaBDHuTRZTijhOoxZV9PM5CEAzsxVninlfUK47bFKAf7GC3aEG39m8eWBfQwB0eGL6Wij+LVRvBrDdF55mu2gLvh+G3fvjsLsrt2jBV3PaaSJuCkgNIeZeJgA5TajaVZL6dBp4/KU+I9axEYRiAIq7dtDcdJ+cqWRjXxC1oIrT7vyRmwTYtPAQRO6H4K+3jQ49XzcA0QE9NjH9CVH8iQKf8GUX2S9WmvdDk2twMMRAf9gSx3Mcno4JvQg8rktp2qOLP92jnte9vMBzcSEdLdWU3iqtxfHS9kGuN5kDI4k7eZBM37UPyl7WHJFgG5th9AXFLaK9JpSPrAHMCfCwCr6ydXTo4Qs5os+71GyzfODAmdWFYngrFH+kwPW5TbOHB06zc53vZ6jgkg/zPFzH0aTvFrOD55P+W+1qiZxqR9SKUgAiGLO7B7WhrEl9+PwEXgIQC1YrldSBnqfUe3dsAZ6B4C/Lpcq9O3euPiMiSfPtRZmcF4DGx3UoMjNvh+J2WP3XELy9d8WY/ZMvrXYn8AwOFnItuaDW4yrFWSXOpn+VpP+WM0UWZ5SX9rFUioumWcyXkbaOLhTi1kIE5azzoPiUbOtDziCaYrEz2pdoZL/DkxEVv4CR/wnBPYEd/MXmzTK99F4XAKDJ0YriRgO5DYJPasx66I+MJJC+7nTM8ps/9v/QF5J99Isvegw+MWPg3HzMn9yJLY85Vzqo2V7I5UIRhNjfLEOTjAZmac5iembeFaz6GrGMNvV5hhHgCBTftdDdoeCJ85GVnXdpD06ceZuxwRegcgtErwUwlN80e2/kReczu1oYZ3qR80cyptvgy0ZNx5G30+Qqx/6e1PdEEyfDd7uphYxlEmsj1IbI+pgyQNIxn+VBM2x6dh5zc3H/eX/kJoFpqDwP6L02iL69Y3T1azVpQOT9MZH8vspC9Ctf50Ruz9+ZA6cARIfr4EDM9cMoUJbV2rxHxVrMzxF8Ks730U0JeNR6GCEbKFIbiulIsgJLdtRIo2Fs/+whKLf3hKUZjIbdp6JfOx9P0HnX9NCRyY+LyH98swf0p3z0K/vFoTOUrxO1nqGhpOg0Q+0n1XzoaGbineurXvVNn6VJk7104or1tHyDHV8JQNQSs8oOZ8Rvbq6CWUbD5hVRUm7S6XLJQ9YtGHPONTBU/Nn2LSOPXlQDYuj90CEUJZy6RWD+BKIfbsEEe+4WDoAkptwYHmLmc7aUG/Tx0OSanbOOCycFn257wWKfkDh/EItzGSHLQkt00TASlqXRMIKz547O7z1U+YHCfkUrw/dt345SdUj+HA2IxGM7JuZ2RFph5rMnHstpSfgFTz8HTa9hRr8y9HGkFBRxxi81n8UmNd0IQFyCQp/BoHNKk5yteVOV8nddNOZYJV/BPPuJ+WhYTrvdDUuisq8HEu4+ONp/sJqo7BwAOnbs2EilUnyvhdwqIp9T6K48Z9XLY/ObnQA0VCw4h2sWBzWGmP8mrnmK81yyCTMvzWi+YKJihjVW6T0pK2o/WZpisRkWYZo0HfMegLLYfxcaQyB7VfU7BnpvGJZ+vHHjxsn03HMAaP+x6S19Vj+hMe/PxwCM5jmxXhs7zbp1UZ6k/IKUq1mF35nnM1sqL4DPkjrRpsV94SznZOgcomqpzAIW6/aHzmmfRbEun4Xm6dR0TNPhM6Kb3h4XG4C9wh4Twb3zRh6+dOPQkfMC0MGJM1cYG3wezP8B3gXocK7T6rHBqwEodq7G+T+m2UZfzPXRReItml7VyY6NiLkabFJ6DecnF5pAbx2xmjdosZYsmUWTwJTKjWF5lqzQd5aFL4i5UVPTcXEqI4TdZqI2sq7tuUamALwI6G5rXDj+1fMCEMPvYuV3ASUAsfjUh98zXLGF8Htg0F8k+JjEAd1cgDnNci6R/9i1J86mxGABMNPiUYbCHZ0Gg1TpnBXOgCFlh+MQiotbmXGcVYlHKjdqPgNp2oJp3hcUh+PZ1rniCnFpVnpNKMMNvzgUw/GHIbJbRf+6Ohx/zs4/fPTsh6DmfwPA6ndPvZHxWiy8SKFBMXmRWIjZ7Lc5Har0+bgiS5KvM6jTQFRnwc/jGAxZKGpcFIpzdNXrzEpmAWlCOBaLh1xB1MAIQjEA8cVmJI5+lrjqPv73hW+9OvF2IXGTwN3P3CDjMsibZQ3gHJkVnRKVpZqb14Qy3vjxcPT7PACxX9m2adVTb9GAWIA6Pj7zaSv6vwP4OAM1uUyjhwdNM5CdKZEAUBa0q679TBXNRKOAloIWX0DWYbEkotAXoOA0n4RWtYpuNQUg2nufKQXIAAAgAElEQVQLJGWJORgDkaJSXix6bQYY0wp6Rgxd6UoxiAtWmzg4R2ZDE4DovK/4cHwT0lz2UirKjxqV/7p58+BDaWGq+y5i/s/JkydH5ir9t0Hxx776fVlhNnRCNQANuwTEsGm/A1+iRaKtxqI51f4ep/EQfAqxech6rEZzJKkBOcoPloLwBSfXEEtB6oyULWpz5A9KuJMGQhSarJ2jxlNO8oFc1NADUEP7utaLkur4v+gP53avW7dukvlADoD27NG+NZsmL4U1BKDfFuDqWgf159UugWr6jREmIDZJv5FSjbqs3lLqx6ifanSRFiOmhWVHVn5iGtU67aUl4khpXalh0Dk+n7TH4Wn1mjppYmLMHsBoWHMuSpcP5Og5mLTpq+Nr38mNnanAHgj+DsbuPn10ZP/VV8u8UPs5fvz4cLlcvFYDuRUqnwP0bY3dwl91MQm4vl8unBwnIDb7AjnthxXuzOh1Ve71O59T7Sfl5HFdORIqjOag51xJ0C/ksrNnY07mOBu8vv2SakJsVT08nA0AUSOjBjnt6TnqW4yGzpbXIPodifTeQqH0/IYNG6YIQOHRo1PrKsq8HyYgutY7Wxsa31+0rAQIQC4BMQP+H9KnzsylUZzY+VzPkdZcOU7qMM6z4dyypsBI51QuR5gtxbQgjNS5/9XhLF+ooesLMOIAKAsTFq5Yd2omaeGMuDmkP3KRwJgqW/bovaHgsU2bhk8KW+8MDZU226Bys1Fh7/cPAFiXy+39oO7lZvh9YKB5AjJGvNjviiZEI/2uUgDqqwYfksTn9AI226m0GoCGmA/U3zwAxdnjFUxNxSkMBMW8nt9vf5wU4Gkreq+Jwvunp4vjcvCgDhgzuVPD4EtGlQBE/8+gF1Z2EliMLsUOXmoZpJkgGDVz0K8yNVN2JQV8ueuNfrmaNGpkfTEg9mdU7HmxZ4p7dFUwMxPzE9VTKlLNoZ1l/zQnRwdAlbo0smbWrkevnRFgjxW5VyrRN6wdOSBjYzoYmeldAfBlhdwm0EsUKPSogHJ57GoAYnQp7X7aDABxTJoyBCCWFNTL7BcXxJJzJwXEQmZ0F8sJkZrGNEsg5mKNo1bgPIfEf6CwwKO03P2W+z0BaGYmJqtnS6KcFMDlprHify9AWSFvCHR3BPxtYIf2ysTExHAUDV2lRv9IFcyAZu93bwRnuB2qM4pjAAqdI5r1TY0ezRRTpi9yHNKO/T7M92l8NvU9BZ3QrMGi6ejmUuONF+bNLiLFhMiNXTTqu/1bznam7EzZmWCNmLJN3r6XLuf33ikR7BYrfxkE0z8Tdj8tFIJr1OBPAfmMJyDLfj9UAxBrwPjSMwTfDAA5gvm5uPiUhGP1mjIspWCofWggTgfIiuyrFukRgFiFTg3IvfA1IkiuAERfGgEoKWOp5Tn8OQ1JgARlD4rV/1ou2z1y8PjMNpT13Ub0PyUV8DVuh4Zu3pMXpc7eMGm/HANQ4zk2cf5PwmdTYpeL+lsNx3xEpITtc3Np5ZE6z11rnCR1oJb7VwMQWQSYD0SfWrMmExMkZ5I6OkYW640m1jJ3f86CBKgFPWZV/gsK8hMZG5u8Sg0r3/EfAGEEzB8ZSyAPAIr7WzEEXz8A8RuG9V3FYgi+yFm3v1lOfJ0IQEzkjAt5PQAtt37N/16fBvBnYvGisABVEVwjVv8AAnbA8EfGElgopqTDty+m4CDLX6Ph3rSzKRMQ66l+X8j7MST4iv0/jvC9CV9UI6KiCXZO+kCNOne1E5pRu1gDqvHii0yURanMT3KyTJIk68lPakQGPX2N4nk18lVB9JIcPDJ9s4G+E4LfBHBNTwsmp4c/B4BIw8ECzyZ6wDcLQM4UZDsgmoKsKm8xALm2OE04oenId2H4Jh356XK7qviEwJ+1Yb4qPqcXIRmWJRmi+AcVeVkOj0/9uqhepUa+BMU78r11b45e7btwZk+TvgvnA6IJlr40zgm9fPg4BUKG3lMytKyI3mtdWc6dzvMpUqHWGYavTkQcHoy1t2b9P5y3iyg6WTIbOu4g4jWgWle0gfMUv1DBt43gpzI2Pv37gF5poXcI5PIGhvOXLCOBpdGbhVqrBq0Hjhcn9FW3GK4NgPhiUfsaHIhNwbjsosGJNLDy9P+44s9SGeVyfZzVBCCarXEtXcwmkMXhASgLKdY1xj5A7oXaV+Twkan/A+I0H/YA21HXMP7kmiRwTgJdMc4BatbxyzEdAM3ElKK1fGNXA2FaytBK/w81C1adszc768LqbUpKuHLc0MUAw8XQkZJlcRCA0jY9TOr0tBxZSPWiYxyG4Lui+IWMjU/+Z4W8/U2yoI8C2JT7rXvwBnkAEMXonLmlOJ8mLe68UFKNyzh2pRdseWwwSB9KC0ov0uVO/VaMNpEbyDLfpg7FiwCbVuw7VsREe8tiO3kAykKKdY0xISJPWNVX5fD49J+r6NuERajqsqD9kbEEzi0hSDSgJuvAOEX3UtN34Sg5YhpUVxC/hATeMRE67QHO6Zz6f5opBalHROSLJl0INTVXCc951lEFv+jET8jInBM/O+e5B6B6VjODcwWnYPEsRAhAU19XYJcA7/U80BkI9zxD5AVARJWUdZAvNrs8sJaJb/dSZo60FZAjHCvE4etW+H44P9KyuhbR89YlHtZLw7FQte98V3ECIiN3Wc3fA1A++/4io04q8GMB9hKA/qcAl2scgvdV8DmsxQIA0fRJiyizCn0nHMzUftjZgYl0fKHie8YHX1ZHKh8ax+9snOM5hwddMmT8YsdaD3/Scb7Yp7WO+9P8Sho5EoAYxcsKfDgLD0B1rEU2p7Iq/iUF9snh8cl/BuQyAFf5OrBspLt0lFwBqOpmix0p4j5hiTWWAJA4EneSy+d98NZsCT1HLmhH+L7I1lhPv7IUQ2k6slh2gImTOdSteQDKe0e8Zfw5AD8DdB+jYA/C4FIoSMOaTVih5c/T2TdsFQBRCryXiy5V2WCuo0RWGlcNonZ91xPfFDOLnUbWAMVC6idi2gDBh4mTLCGpx3ldw3SdL82BZeIgz6qvWi337tFzIgheg8V+OTQ+9ZgAlwLY2cAe6VH51ffYi90w4uiT64baChuovmk2fTa1LppZztlMn0+FRGn140Wq+aTtgVwbI4bdQ9cRMfOD60MtjXOOe6vVz62d+aRW9oAU8AEF9svY+NTTGgOQD8HnuOgx82DgOnvSCbzS8MdRm1Zi4GGYPSpTE2ssozjmCIobIqbcSf15ykyBCk1GB0AxU6MDzhzALsct1m1DHxXgDTqhX4Bgpw/B57d+TJ5j2NgxIRYCBBkUUOY32/pHXmgNnWg+DLO/JQxXw7CppsiL6TSn5sPSlbherYYBmjglLW+J/VZJDzPPy9GERJe5lKF4jQHoZ4n55SNgOYg7Jf4i7QVfqDh8nMON2jQkTa7UfHGaj8tFYuJR/c+ZAhA1H5erlOT7tIosbaGHGUtFmNZQZr5Sna1G2rQOXXjbaZphrAV7TaEswejrwofo2Cmnmbts7sc2wgPFQibUEZ30wMzpKSfO5jjHp7ai2KXPsODzYRQkJFUItcXQZWoz/N7qg8DjSkYcY6PnB8pJ/nOAHKQGtD+pActZyc3pMTpw2IVvcnIu98XcxaQ9XTmaT9z3Pa6fin0m1VzK9T5nSgsdsEq/Lza9CEKt0nzeAogWzo/lCN/mK67MpR7K2w7ckp04JX5bOQB6IzHBOnGSXTknAhAT5Uh14RIPCT4BjbHuPwgWkbVVxZtxmJ1HI8CTvtj0+RCkHVlbwbScJG3pyiyyDbDrSH2c292/yi17ggMEoAO+Cj57gcctmEn63ueAaCUc9O1QG0jrz1LunPTZ6gWgNDnINWssxi2hGWpvZc7ShdbFRfXKEaaTdj311K6thLVuyTMIDjEMP6bAlpbcsEduQk2H5gQrthl2b1XRZ67iTUPVjriLGlDcDLFRzcdV5osgKIiLDJJioxAyPyrXp6hrcNbWsYGi6xdWR/eOum7S2yePUwM6BmBDb8shm6df4Fym+ZW038mKNjSbGTY4SlL06vwizBZ2rIGLVV11az6JudYXxsCTpiZ0WnLmAlc0kxPL9RfRNijtXrrsBAHo1JsM9Wt66anzetaF7hcMI6fOZ0ZyOulrvYGHj2k/SAGbRoYac8qm5RiUh+vI2hdTgzRLztbAI9V0ScoV7bK6PVd0TTKr86TTHoDqlNjFTj+H+zntOJpB36oMp9jQUPMVi1k27kuIzxr2+SSV+QvtqV1eVGsq8xt58NQRnRbUeq7oRqR40WscAB0HsD7zoXtwwLwa57VTlJEjkSf3dBwNatQZ6/xiQZwRTmczw+1BBqRsecrGA1Ce0nVjOxPsCIDNud+qB26w0gAo7sBKAKqAVKr1FmkuglVc10W/GE0u+n7aleNTzzZ0JlhSH8bkxEZr2+q5Z4+dOy6Hj04dhGJ7jz14Lo+7FIDSsHIjTtpcJljnoHGZRRwFouM5TTas9XlSAKKm4+q6mGDYREvqOqff9OnOCZ0AkG9Y2LQ43zoAw/A+ETE7wVY3IBxI81qaaECY3cwaG4m8Pk4DmGcUKDa/6uX1SQtxmY7gSiu6yCHP509LMghAviqssX10katcIqIvxchIrtUA5PwcrH5vogVzRtNqeBi+gDOzcfvntCaqHgBiNriLdjEfqhh2hdlVLSw+/zSfP80DaliS/sLzSCAuxfDFqNltjtTkiMPMcVlBsciygu7MhKbWM83oF5MOmYhX43FOLRyjgc706r5aOPYum3J915iIWH+pSY3i6tXTFopRPR1HRlugOkLE3BYCEEnUuzUTegGA5haznmsR1TmdYJMuFvQD1eo7quUerTiHzI5T0zEANRr9a8U8u/QeMR2HJyTLfvn4AjK/hd/8Q0MxoVY3HtW1UPUwBLaSAzsPubo0y6T1NU0wlp34aviMJZ0SknlK1owFmxDD8+ueTte4BXKh6779KZVeBiBXcJtwRHs6juzfEQAxJasnpc9euGlJBntwLXRzKGTXSC/7GZ9/xF4FIPaGZ+Y3EzDLFU9IlsN+WySl9215shfvYlEqYi7ohNu4G5LvqqXRiwCUtughAJFqNq34z36X9PSIi215fGPCHDdC4gtiKJ6UrIwEdVNAzDmhZ+IasLTRYS3SqvYBDSWdYLsh/8cV3brES/Y1iyk4vPO5lhWv+5yqxoS+NXPd0qv1gpQZ0ZGs94VxGUIXJePR/JhN8mDinu61teWqBqDhpA9alq2Ua5V/PefFPexZ8R+3kabfp94e9vXcr8fPTVszv84o2NcV2CXAewGM9LhgMn18lzkTt7hyofhOohyt5UEJOgvN+tjhNEmFXi6cnmoNTMYcHio4vp9O5qNd6OyR9rC3NL183k8te6TBc84q8LwAe+Xw+PSfQ/UKGFzve4M1KM5lLktJ15kbxFoohuX5Z5olrEygdrDcS53PzC4+Ks2uSlldJjDNsHLSIYKV7eeb72ILG3EdQOiAZwmG62jaSQd717sW1gobAa6VdDluw0PQ5beGN71yXDCG4C2ehZHXZGx88j8r5B0AbvTdUfMRelqiQbBhmxlmRvMFpVZEIKJzmn/vNNp69yomfdNjJsTIEdBfiDU1Nb34PC4LvC/swOJTto8GSLfK6n6CDzUglpq4HvaJxprPTvCjJhKYUJXvi+ircvjI1P8JwTsg+JSvis9/gyxUiFP7IT8OtSJy5PR3bsmGM8US84R+oZiYK35ZU8eQAyUCrOHzMAucCZixltdJ2l3aAdW13KHG48Lstfu38t8hPXGHMRF8F4qfy6Gj038A1asAvU0gl/fE47fxIRea8CVqhOuewYzpwdDx5HSir4RzTtsvs/87X1rnlE6iRDHwxJw/YRg72tPuFp0GPtRy6NeaLbGf2bmdTztprm3coq249X5AdkPtK+yK8a8B/SVV+SIEb2/F3f09Ygm40LYmADQUF212crhaLVCOIgc+TnNITJZFAIpNSpqWnZhuQHm7rqelKO7/3mAnV79/m5bAqwp8ywh+KgePTN9soFer4DcFuLrpof0ANUsgTnIjTSkbGMbtiKlFdHLImuYKp70APsnTUnvgvDvN5KpeDDZULJXiEovqJEOv+dS8ZbM68WUA/6CQPXL46NkbFME1YvX3Ibg2qzv4cZaXQGqOuZbE/QYDSUviTtaCln+qzj0jzmuKCdbS+i7vdG7Ler2gol8V0ZdkbGzyKjV4t0D+gwLXt2U6PXrTNLGP38CuZIPEXf3kS+6wsPUKWR9XWjIdE6xR+/SaT7sWVp8G8BWx+IkcOjSzHYG+24j+JwU+WmOya7tmvqLuW51ZzDA8ndHsJd9xeTMrQOo0HWN+n8iVWfDwANSWheW2f8yq/BcU5Cfyxhun1xYKwTVq8KeAfAZAf1um1cM3jfmD0mhYwQGRP7KTgPNbWSZURo5ilY5oD0DZybfOkeYAfUAs/u9yOXpJJiYmhqNo6Co1+kequO1N1Wit14LqFGmTp6cJfCxaHSR/UF/Y0dGwJh+35Ze76Bf5fRKOn9j/4zWgli9EnDV2SgS7xcpfBsH0z2RsTAcjM70rAL6skNsEeokChTZMrmdvmTqjCwVmEJPAjOULnR0N66bFYrid7XUcv085ihMo/dFyCQhQVsgbAt0dAX8b2KG9cvCgDhgzuVPD4EtG9dY34/MMxQ+2fHY9fMOFaJjrHGpcDRXNsE7kD1oIw6c9epJ1qw7Dd9pSMuROcn0CkOf3aevqsAp+jxW5VyrRN6wdOSCvvqr9Q0OlzTao3GxUCEAfALCurdPs4Zu7Oqq+0JHZE4w66XDFqUkWNLtkpBxBTOo2ImA6AZ3prHXrFAcvcw1Jr0EA4s+UIqWT5NpDczkpwNNW9F4ThfdPTxfHRVXDo0en1lUUHwPkVhHcBGBrDwmlYx61msaCANTfH7pq+XYfBBoWa7riTdZPka4iSjK5E4dhDEBxbRuzoflTWAfWxsnT0qLDmYW0rOiPW0sz/N7OWbVRIO2/9ZgqHgH03lDw2KZNwycJQHL8+PHhSqX4XusASD6n0F3tn2vvzWCRSzpu6eMyowuk7GjfC8OsZ1aO03xhHk0KPHEh6qIzxb3UArhOqC6xMnAaHDO721Xgxip3djadK1Uw74poveO5nW+VQPaq6ncMASgs/XjDhg1Tbmfv2aN9a9dOXobQ3KaK3/IlGe1Zpmou6XCBSzpoW18xVzleWeQDiivHL/wSL3SGDcQVpMadYdvTEdXl/bDui74fRyPSLhhsz17qxLsqsEcE/x0Vu/vUqZF9V18t8w6AqAW9furUqoFy321Q/HufEd3m5aviki4WY4d0O8ozWLrA2ilqESltRfVrnCpmKfNjLLVYK6IfyHFhDxRaTkNLra1SiWu+5hLTy5dctHlPx3rwMxD8P7OF+d2Xr117VkR0QbdX1eDQ+MynjeifAvg4/Yrtn3JvzuBcLmlyBS1y67RKIq47xHzkesPzZz0vcHVrZpLxs7yEfqFWWJKx1kZS+aTivaI1U8m2SrY9eh9mfz5qVf6v7ZsHHxIRdns810d4+OjZD0HNnwD4rOeHbt82OZdLWtDXx9yg1hHap6YXtYfZUuy85ZxqdYgvMEAaOB5sFtkSRPNOK0g1nxR8YvK0eJe3z4vWvn3UYXeeBPAAxH5l26ZVT6VzO2ddDk1MvUdU/i1UbwWwnZp0hz1ET00n5ZJmeLvYR5OGIBQ4JsU8D5J2pZ1Bnf/E8STX7sB9a41bklaQIze062pRsW7enLMDn4SxsRWaV57rsQLGprZzCCL3quhfbx8dfuG8AHRw4szbjA2+AAhLMt4F6PAKePiufYRq9kRqDwSflOo0T22CmcNxN4xF1sB6TLBU4LzGBECxEGJoiGZkPt9nMWDGZhcznTl/p/kkOn6+cN2126uFE5cpAC8Cutua6Fs7Rle/dl4AOnBsequx+glRUANiZfxoC2fpb3UBCSz4VAhCNGeoCTFTOie+ZVe64HhzYvrVlP+5Xk3CAZCBi4QN5wFACpBkjJnOrmuH62oRI08jgOk3YG4SmHjTr/y4Cu61Rh7euXFo7LwAdOLEiVUz833vDSC3QuROnw+U24LUNXAKQLyImk/a7pktfvLopkHQoe9nEYAWuOfrnHe+AOTa6aQmF/uWpRSxXvOpa53yPpn5P1C9K4LeO9g3/+P169efPS8AMR9o9ejZnWKD2wT4MoBr8p6cH792CSw6d6kJ0S9E5y41oWwjTHyxF3qBJbk/tXZFrX6avDQgjsvM7NRPRaJ8n+dT+z5qw5kvKfC3aqLdZyZWHWD+z3kBiPlAR45gwMrUzQLzJxD9cBsm6295QVNs8ReOP4jJfsXYJMsy45hOZ5J2pT4gahZph9d6F4dmIiNg7PqRFdEaSfEJkHF1O53Nvp9XvevS0vNVfqCwf250+L4tWzDL/J/zAlD6j4eOTH5cRP4jgE95grKWLlVNN1uonjeCvoTGNctkxcXuEfFLHncLrT0KVu2DWaCaLWaT0c250eE8k2Q4+/KKmrZMO08qAfq/VPFn27eMPLp0IucNEByemL5WIvyeigvHszA1n/BFO8XSxfeu5rNJu5CSypXlD1kchBuaONSA6Auik5de3VqLOKtLMmgixjlMzWdzn5OfxAzncv3AmIV8/Bg1S8CF30XlfhvoV6vD7xfVgA5OnLkisMEXlM5o6Hs8P1DNAm/piemL7pgUBwqJPyiboDNTD+fm6Ywmjw7bFycZfRfRhBaAkfViTEIsBBigiej8VM0TrKVNBZkgyTqvevOTWro4/maUwDQgLwj0vshE36wOv18UgMbHJ0cryjC83GYEn1Bgi5dn50kg5QQje+JAMXsmRdJuzCf5QASjlMzrQuH4tJiWEMjSCzrJCUBxGUbzwMgQuysNSeu72lZn33l7oRNnJMARBb7H/J8AeHTz5hGG4885zrsrxsd1yNqZd6jY2wH5dd8xtROXd5ENg2YYtaA4STE7JkVqQeRPXkzySx2+SW/4KrGQ+YcYQ02HbYVoDjJSl4Xpld6GDuephNmQ2lDzkNaZ67pyZiWvCew/Rhrs7g+mfjo6OsqExOUBSFXNoUNn10hfcKtR/KGvju/MLXFuXzFqHHHNGDWOrA4X8rZsaRxHnMirE7kyB3aaWLwLEw6ZDkAOINcb3nEBsUVzdjDh2urMJNSqZAzIQKvKSk5+nPNK4Dko/ioQvW/TpuETaQFq9ZkX3B0EobGJ6ZtE8ScKfMJHwzpvi1UDELUOgs9gMcwUgNKnpvnF/CDWWPHnOUl/zi8kLimyEBIAxYFPlvjAZ50rRQsaELUzD0CdtyerZjQHxaMS4CtbNg49LCJxM7ZaNKD0HEbDoGBx6i0AttG07+hH7uHJVUfDssq3WSrOtL8WNR8CQHU0jmBDQCANq/uZneLjpkGNi9xEMbczVa/ao3I9vC3a9eiMfh0W6AOw5qtbtw79+EITueg2GR+fvawi0a9Cwczo93qKjnat5/L3bQUALT+L/M6Ikw+ZFuABKD8pZzWyTEH0x7C4NzThtzdtKr7eEAAdPHhmnRTCDwH2NoGQI2hHVlP042QrATp/nQnG1s4Z5QNlO8PGR6OmxQhYmpcUdzb1GlDjEs35SsEhqD4AmN22XHlyx47VJxsCoH37tNjfP3mpDcwtovgtXxuW88I1MTydvQSgoZUKQKxPm48TIz0ANbFRWnBpyv0skd43Nze877LLpNQQAKW1YWpmPgnoHwP4FZ960YIVrPMWadEnw/CsucqLd6fOaWV2ekqzSg2IfiA6wnlk7WfKbMK9PRDjBd8D5C/EDn53ae3XUtHU5Co8eGTm/YGxf6gKOqPZO96XZnTQJvMA1EGL0dtTofOZvd/vi6z5qx1bBp9dThw1AdCBo6d3BTb8AkRuB5Stm1ctN7D/fQsl4Ii/EhNscIX6gLwJ1sIN1fCtJgHdA8g9kVS+uXPTmr3LjVQTAI2Nnd1gTfABgcuMphbkO6cuJ9lW/t5Rn65sHxBr0WaT4ljvA2rl5qr9XnHphd4HmHvERj/cunXV8eWurgmAnlMtjE6c2RlqeJsCv+Od0cuJtfW/X0hEZE/5DDOhW/8k578jC0/pA5rxYfhOWZLzzeMlAf6mIpXdE6OrD1wnUl5usjUBEAcZG9NBNTOfgOofQhxfdHG5wf3vWyMBV/zpOpGGrgfXSgQgOqIJQNMsxfCJiK3ZWPXdhZGuJwD5S7GDD2/dKjO1XF4zAHEwlxlt9bcBuRnQnQD6armJPycfCSy2chYUkmLURXbEfO7ZzlGZAT01M+/oQRxPdl27t50zX/H3ngfkAPt+icXfXSzzeakk6lrCg8dntgUVvVmhtwMgXeuaFS/aDn7AauIvtnBmGL5QiEshVuLBGjTScZCONWVpXInP2YXPdFqAJ+l8thW5f/v2wUO1PkNdO5WJiWFx9l2BRLcrzK8B+rZab+TPy14CsRYQc0MPDrCHfOic0XUtavbTym3EmKs67vfuCclyE3MDAzvajX+KNLinUhp48WKJh01pQLyYZGVW5FNq5Q8g+kGfE9TAemVwSaz9qOPeodk1NBC6XmEr+fCUrB25uhFUfihG/5tYfWjLlpFj9cyy7i9LVQ3GJiavF5jfV8WnAWyu54b+3OYlsNCeJwD6wrhbarHfODBa6Ycnpe+4FR4XwUMK+9WtoyPPnI/z52IzrhuAONiRI7OXRib6VQHuhOI6AAMdJ5YVPKG06yeJv1j/RdPLNShcob6fpUvpKuNLFczSF+Ta8sRn9Mjjd9LOnoXgRwrcHdjgn7dsGdhf7+QaAiCG5IGp6yByhwp+FcCl9d7Yn1+/BFLgoZfH0W/0BSgOMOwe9NTL56rj0+aJSW2YI2draDfXvw7+igUJ7BfFP0P1bmD4uVpD79Xya3jJJiamNs8rPiVWfk9Er1eg4BcmHwlUd5swARzbIAtOyQNNv0+WtKf5PEH2o1ImpImdLUXOMU26jp1DEXMAABXhSURBVLSFtQei7OV9nhErUHlaoX/dF+Ch0dHh8Ubu2jAA0Rd0+Ojs+wTR7wJCX5DvH9bICtRwzdJuE3Q6U/sh708vgk8qMrXqomEEIFJ1kKs61RJrEKs/pXEJWAjGoHhIxXx92+jAs/X6ftJbNwxAHODw4ZkdMNEdNMUAMCI21Pgz+SuXSiCNdDHjjq2X8+o20c2SJz0se8Ozgyt7xdM/RE3Ia0O5ruo0gKehehdscM+2bYNMQmzoaAqAXn1V+4sjs+8R2DsM5EsK3dXQLPxF55VAmuxLf49rcdMXoC+Mo129rPksFRYjY3H7oFgTomPa9bMXnyydx6ul0NcF8g0Lc1dlduAn9eT9LJ1PUwDEwVgpr0ZuAuT3AHzIR8QaX/Jqjcf12JLY2cw2O+wumra6afwOK/dK1z6oYp1J5loIsXWQZesgTaJkaQ8R76xuchfMAngK0K9pRR/evn3ViWbGaxqAXPueYzPvlkh/QwWfAUAtyBeqNrAqqbOZ4ENHM4tK6WxmoSnD7OR99seFJUD5EXBI3UEAWuhjFhGM4uu8g7qpHcSC09dF8aAN8PfbNg69KCJV3eHqHzuTHX306NSmstUbReROAJ8EsLH+qfTWFYstbeIkFubw8EOQYTlFCj78SS3Ivzj17Q9GxSpldf4hmmcEJVpldFzTZIt9RE7yCwN7GS8rY2Y5f1dV7y4YeXzTpuGjy16xzAmZAJCqhuPjpe1WKrdB5csQXNvsxHrh+mqNJzW14sZ+7Coam19e62l8J6QmGP1BBCEHSmyqGPGTmmYxBmXyIjQ+1e64UvE8RP82QHjvpk3FgxdqNljPw2Qmd4LQofGpDxtxviCaYqyUX/m1AReRdnXjPtZtpd+4aRM/Sod+HjqUXTfRMObyIQB5a6uebbz8uYyOEXgIQASiiFoRNSE2WWSbaWpHTjPiWOdqR14zAs2s0wAetKpf2755+AdZgM+5+ufya7jsGSzRUInuUOB2pwWpI7Dv6WPpfiawsIc6NZzU1OJP10c9ASO/4fPZMs70SpzS1lILQgxKTiOK//zWltP5zKWrRhWcguL5N5uT3iMa3N1IycWFnjczDYg3OHHixKpSpXC1qNysIl+A4h1dJegGJnsOwLiGxVTnY58NfToEnNi/A9e22Pl4qPEkeT2xcznbPuoNPEZPXpI6rGPtKNGQ7CJIpRpRClqxkBajae4bPNM3qEOXQfBzUf2Wit5fDMt71q9ffzarmWYqPkbEXj91aqQ4338jYJkh/TEAq7OabCePU21uGRN3qSCwBAFc3k7qXOa/O00nBShva7V1Wc8xv2zcg54fZ6IlGlEKUIsmWk/5jc4A+hhgvl7qm3vi8rVrJ5uNfFUveKYAlA58cOLM2wIbfBEAzTE6pFcEdeu5kauY+EtMqulI/GfEGo4DHgdAi85k4zWdtoJNrTcn0FAjcsCThPWd0zqNoF3QbxS/TitIK5oX4HkAd0cm+uaO0dWv1SrDWs/LBYCYIT24avI6wNwBxRcAXFbrhDr9vOrIFTWZgCZU4sOJNR04DYfm1lIzrNOfzc9vUQI0tGh6cb2rtaQFUy0FKJdjlDqvVxT4UBj7IPgWYO+eOTvy3BVXyFzWeyQXAOIkDx48sy7oMx+Dyu8o8JFua2a4VNtxJlNiPlHTceDjNB2CUBo2jx3JK+gbMOv91vXjLfqNkDiv05B+HFFzJtwCICX+ou4M858V4PsQ/Zto3j62Y8fqk3ksXm4AxMmOjZ290prgCwJ8FtBrAIzk8RB5jbnAPMhweRCDDEPk6Z9TsImBKTbF/LHyJXA+v9G5YX76kLqaKG0SkJcUeMDY6Ftbt656Ja9VzfWNeeON02uD/uBao3KLxm2dO5rEvjo5Ng6Jp87kReApOJMrdir7w0sglUDqKyonCY9Rmf6jJKy/pB6t87+n5DVRvceK3hfNRc9fcsmaU3mtdK5vEaNiBw6cWV0o9n1MNfotiNzYyblBaUidTmQmBLLFDTOT04xkF1ZPnM55LYgft3sl4DSjxAyLfUW6UBjLXCP+zr1wub51TcrP5fzoEyLBfy+X5h/buXP1mSyjXktn1xJRHDh6eleA8HOwcgdEySHdEcWq1aFzV33ucnSMcyyT9oJFoPzpqS+a3NQ9eLmrzmcJCKvzK3F1Ps0060pAOpavqASV52D07giV7+zctGZv3kvXEgDas0f71q2buVrF3g6RLwG4Ku8Hq2X8c5gGWX1OwGH1ufPzxObXSm3yV4t8/DnNS2ChHi1iYWxCFZLyFTU/fNYj/Ayq3xA195w8Objn6qtlPusbtEUDih3SOqjB9IfE4jdVXDsfVsy3pVasWvNJM5JT8OFPV32et+T9+D0lAUekH1nMUyOajzWiNLdoofKsfZuOtV7HhBSrBn8v0dBTjRDMN7KgLX3kA8emt5qKfhKQ20WUofm20HakAETwcUyDhZjsyzuXG9lC/ppaJUCgoQnmgGieHwJRhMglHbU1h+iYqnwf0HtsKN/duXForNZnava8lgIQExSHhqYuV4NPIG7tzCzpwWYfotbrlxJ+sa+WZxqsVXr+vKwkkLYVcm2m5yNnmhGYnH+6pW+ku+UMIM8D9p/E4uHp6eHX80g4vJDsWv647C9fLM5cY41+ARafhLiC1ZaAUNoxgZXnrqFff+Lv8SH1rN4tP06NElg0ychjbTE/F7kExhaD0AwUP4fBd42Vb5VKgy81w+9c46Ofc1rLAYh3P3To7HoNguuNwS1Q/WwrSjUWwUfQXwhdQz+aXm34xmlknfw1K1AChBuaY66t0GzkQvaOS791b+U+iDxgLe6TKHqmWX7nRpaodY9aNTtVlSNHJtcjkI+q4jcAoT9oQyMPUMs1aYsW1020nz21Quf78eH1WqTnz8lTAg6Eyhazc2wtVKlqK5Q7EB0H9Psi+B+I9PEtW0ZOiEjqD8/zkduvAaUzGB+fvSzSys1wWdK4Pi/qDgIQkwip8QwOhGBjP4KRP7wEOkECNL3oByIAleYiFx3LucHiGQDPQPWeQML7N28e2NcuObT1LXxOtbD5+ORlJpLPqJov5pmkSNZBdhMdHCiAzmd/eAl0kgQIQjTFpmfLLkKWIwC5ZEMR+00b6IPjG0b2XSdSbpcs2gpA6UMfOjr1boHcCdVbAbBotT9LgbB8IiwEGGBL4/7Qaz9ZCtePlZkEmCM0M1t2zRXTqFhmg8cDkU7jJYjcq9C7tm8a/knG49c9XEcA0MGDOhCGM1cr7G0q8nkAv1T3k5zngtT3Q9rTgf7Q+X8K3vGchWj9GDlIgKUbsyWaYRWUy2mL6Ux9QT8V1W8LzO5KZXDPjh3CJoNtPToCgCiBODw/db0Kfl0hzJTeDiBsRjopALGl8VAxdGF3mmId89DNPJy/dsVJgDViNL8IQOx1nxLkZxAVqzD4LKoPCvCPpdLwM60Ot19osTrqXSSJmSmENyjsrQJhg8OmmBTT3ur9/SGGB2Pns0efFfferpgHYgiKPEKMiFETYmdXpkhnwDO1T6HfBcxuLVeeyotcrJGF6CgA4gNMTExtrqj5oFX7qwJ8HMCWRmvGCECkSE0BiOaXP7wEOlkCzhk9F2EqcUY3CUBEsCMKPGrE/HMo9oejo8PjnfT8HQdAzBE6eHxmi6nYG4yRW1TxKwB21CO06sYp9P8w74fhd1a5+8NLoNMl4ABopoK5+Uqz0bCDIvietXqfDc2TOzYMHmlHrs/F5N1xAMTJEoTGxma3I4huAISa0Ic11oRqOlIAou3MIlOG34vF0DX/84eXQKdLYL6cANBcJSYxq/8tVQHGFfgBoP+MKHhy69aBQ50GPlyH+h+tRatHNkWCkISW2dKfFeBjtYJQmkPhmA37CEBxBMzTqLZo8fxtmpIAqTqmqQHNVZwjut5DYrPrMRE8oBXzeAI+NMc67uhYAEo0oWBiYu6SMiofFtU7BfIBBTYvB5zVANTfx4r3JPvZF5123Ab0E3qrBNi/fqYUR8IIRnUcieajT6vIXQWEPxgd7X9DRKI6xmjpqR0NQAkIhUePlnZUJPqIqCMyY7fVrReT0gLfTygu8sXkQ2Y/+9qvlu4tf7MGJcCOrLOlyJVlEIxiCteaTDHy+DyuggdDDb6/aVPxoIgwBN+xR8cDUKoJHT1a2mklukEVrBv70MWiY9UANEDajb7Q+YI8AHXsPvQTq5IAAWguyQdiXlANAOSiXQCeEsHuAOGTna75pI/bFQCUgtCRI6XtaiofhMinEUfHdp5v56YJiAQdZkBTC+KfG3Dm+RfDS6DlEqDfJ01IJGtihX6gi2tAByD4HlQfEhv+cMuW4uFO13y6DoASEJLDh2e3IYgIQrdL3HF129KM6WoAGiyGLgrG7qUegFr+LvkbNiABB0DluDqefqCLABDNq8PKDqaq9yAKfrht2wDBp37PdQPzzOKSrtGA0odN84RCi/fD4lMKvQmCt1cLY6EEo2Bc9buLgHn6jSz2ix+jBRJwJRkJAMV+oAsyJb4qqo/AmIcqBs92Yp7PcuLqOgBKH2h8fHK0rOa6hFXxo0nZhqN2fQsAFX0IfrmN4H/fORKoAYBmAOwXlcctcF8o9kebN49MdM4T1D6TrgUgPiJrxxCadwWCmxTyGQDvAtC3WIRqMDQYa0C+v1ftm8Kf2V4JcP8y/E7tp1RaDMUnLgT26npRoA9Gikck0pfaQaWalYS6GoBiENIB6Zt9j7HRZ1XMr0D0l9TqWuZYknbVA1BWW8WP0yoJXBCADNsmy09F7fesCR7Q+YEXOoFSoxm5dD0A8eEnJiaG53Vwl1H9qKrcbKHXCWQ9o1/DQ4yChd4B3cwu8de2VAJp2x4Sk1VVxZ8QkMlQ77cij/fJzN7R0dGplk4sh5utCABK5TI2NnmVCm6ywMcEuLa/L9w6PBQWPQDlsHP8kLlJYAkAlcrliAmGz79ZjvSYKB7ZunXkZ7ndvMUDrygAIsf0tvHStoqWr4UENw32BzcMDYW/1N8X9LVYrv52XgINSyDlBSrNRfMzc5Wfzs/rk9DokVAKzx/eXDzcTg7nhh/qAheuKABKnzHtOzbQH9w4PBh+uL8/uALAaNbC8+N5CeQhgQSAJkrz0aszs5UfzJf1iXb17crj+arHXJEAFDunz6wbGAh3DQ8XP9jfb24EcAPiQlZ/eAl0ugSOVCr6ZKlUeWJurvz07GxlbyexGGYpvBULQBSSqobz87iir8/1HLsJwC8nXNMjWQrRj+UlkJEEJsndDOC5KIoemZmJnhkZ6XutW8oqGpHBigagBIQKifnFThvUglhN/568miA2sgj+Gi8BAGwW+MKb+/MxAE8C+CkDvNLGnl2tWJUVD0CpEFV1AMA736QrIM80q+mvTirqh1ohaH8PL4ELSGA6qWTfw2p2AI8CeFmk/S1zWrFiPQNAiTZEEGLxKsGHhawEIjZC9CDUit3m77FUAgSflxLg+T4AghCLSdver6tVS9VTAFSlDa1O/EEEIPqHrvTaUKu2nL8PgFTrecX1aI81n38REZphPXX0JAAl2hBBiMyKVyUgRI2ImpF3UPfUK9Dyh6WjmZoONR6CD5MKx3oRfCj5ngWgKm1oTWKGEYDel2hDDNfz3/3hJZCVBKjdkLWQWs+PEgB6SUROZ3WDbhyn5wEo0Yao9bDtzzsSbYhm2bUA1nfjovo5d5wETiQRrqcTrefnBCMRoTbU04cHoKrlV1U6o+mUJgC9PwEkAtNGAAzn+8NLoFYJlAEcS7QeAg61HgIQtR76gPzhTbC37oEEhFi2cUkSticQXQc41sXQ7xovgRokQKrUV5lQmGg8LwM4AOCoB59zpec1oAvsJlK/JiBEvxA1oncnJPgEJ+8fquEt7MFT6M8hMyHB5icAnk00n/3dxNPcynXzAHQRaScgRMBhtIz+ITIuUhtKkxhbuVb+Xp0tATqYGd2i1vMiAJpdpNFgNnPXkMS3WsQegGqUuKquSyJkBCACEQGJ0TIC1Koah/GnrSwJnE00nvEEcAg8BKBXROTkynrUfJ7GA1AdclXV4cQhTeAhxQc1IZporDPzdB91yHIFnEpTi/VadC5T86HPh0B0TES6nqmwVevjAahBSasqI2MEntQkIyDx3xi6XwvANDi0v6wzJcDuo6cAMKTO6BYBJzW5fioi/Dd/1CkBD0B1Cqz6dFVl/hA1n00AdlX5iVj0eqkHoSaE21mXEnz2s0i0yr+zl1GtxMfT8/k8jS6XB6BGJbfkOlXdAOBtiX+IAMT6MgITfUfUiGi++aN7JEAzihoPfTkEGmYwpwBEjp7j3fMonTtTD0AZrk2SQ0QTjJ8dSbNEghE/zCMiSPmj8yVAcPlFAjgEnX0k2UzMrxM+lye7BfQAlJ0szxlJVYsJ9Uc1AG1PTDbmEfHjo2c5yb/OYRnNYg5PmsdDVsJqACJFRqnOMf3pNUjAA1ANQmr0FFWlI5omWGqG0SSjmUZtiGH8yxOQChq9h7+uKQlE5N8B8HoSRifovJaYXKn5dVJE6APyRw4S8ACUg1AvNKSq9ifZ1dUAxJIPmmbUhkgRwp/eX5TPutCvQ22Hlen8SVPrjSUA9IaIzOVzez/qUgl4AGrxnlBVajvVJhjBh3lF1Ib4oYa0M6nO95pRNutDTYeZyiyRoIZDjYcf5u0QhBZMMBHhuf5okQQ8ALVI0Be7jSp72b8FgEgdS9ONoX5W6ac/PX3sxdeMleb8MDSe/mQki6bWOQAkIjSz/NFGCXgAaqPwq2+dkOanZhhNMJpj1I7ouOaHWhFBiR8mPJLf2h+LEiCPMpMBCTQp2NCZzA+1HJpdNMGc+dVLvMudvEk8AHXw6iSgdCEAYqif2hCBaDD5MPLGD31NK818o2lE3wyjUfzMJB8CDzWdNEP5LQDkwaZzN7kHoM5dGzezxGe01AQj4FBDounGyBp9SPxQY+KH/07zjed0OxAReKi10IyiyURthmBDnw59OEwS5L/zHILSOSaY9+l09gb3ANTZ63PR2akqndksBTkvAPH3FhhRa4sQ6TeQPmvRJwYFiRke+ekj0ZqIA6oAEJKuMX3A7Q1pcocs8FAo+EcLKMm6CCr8VFQxD4DsgemHf59XxZwx1HRkUsTl51wIgEh30dO8yl28hT0pfTcvXpWGVG2C0SSjCdZfAYrRXDRsLVap2jUiskoEqyTAsMCMCDAiIiOAHYCYQQj6TWzC9Ymkppzw7wSoFJSWK7JlzoyqEmxQAZTm0pzSbIrBpkRwUXXayqyqTsJgEtZOqtJHY86qRmetNaeNwdn+/oB+GzdGlQlGs8uZYF7D6e4d3OT3W3c//EqZfZLwSA2G4JB+nEYzO4vBKJpfpWrWBYGsMQZrrNiRUIJV1tpVQSCrVTEoIkMiUlwEHgzwz/w3akpVAMRxqSVRe0rBiGBDDSbVblIAKiu05MAHmIV1wFNSdaBEU2kmUnvGJKAjYghCp63V01FkTwZB39mBAQc0qcbE+6SfyCcIdv8O/v8BHkuUAB3hygEAAAAASUVORK5CYII=); background-position: 0% 0%; background-size: 100% 100%; background-repeat: no-repeat;"></div>
                                                    <!----><img src="/static/img/avatar.png" draggable="false"></uni-image>
                                                <uni-text data-v-7edaee84="" class="info-title"><span>My</span></uni-text>
                                            </uni-view>
                                        </uni-view>
                                    </uni-view>
                                    <uni-text data-v-c4b04b80="" class="u-line-1 u-navbar__content__title" style="width: 200px;"><span>Share option</span></uni-text>
                                    <uni-view data-v-c4b04b80="" class="u-navbar__content__right">
                                        <uni-view data-v-7edaee84="" class="navi-right">
                                            <uni-view data-v-729c0bcb="" data-v-696bb61f="" class="u-icon u-icon--right">
                                                <uni-text data-v-729c0bcb="" hover-class="" class="u-icon__icon uicon-order" style="font-size: 24px; line-height: 24px; font-weight: normal; top: 0px; color: rgb(0, 0, 0);"><span></span></uni-text>
                                                <!---->
                                            </uni-view>
                                        </uni-view>
                                    </uni-view>
                                </uni-view>
                            </uni-view>
                        </uni-view>
                        <uni-view data-v-696bb61f="" class="container-card" style="padding: 10px 0px;">
   
                                <uni-view data-v-31da562e="" data-v-696bb61f="" class="u-input container-card-input u-border u-input--radius u-input--square" style="background-color: rgb(245, 247, 250); padding: 6px 9px;">
                                    <uni-view data-v-31da562e="" class="u-input__content">
                               
                                    
                                        <uni-view data-v-31da562e="" class="u-input__content__field-wrapper">
                                            <uni-input data-v-31da562e="" class="u-input__content__field-wrapper__field" style="color: rgb(48, 49, 51); font-size: 15px; text-align: left;">
                                                <div class="uni-input-wrapper">
                                                    <div class="uni-input-placeholder input-placeholder" data-v-31da562e="" data-v-696bb61f="" style="color: rgb(192, 196, 204);"></div><input disabled="disabled"  value=" {{ route('home') }}?webcode={{ auth()->user()->refCode }}"    maxlength="-1" step="0.000000000000000001" enterkeyhint="done" pattern="[0-9]*" autocomplete="off"  class="uni-input-input">
                                                    <!---->
                                                </div>
                                            </uni-input>
                                        </uni-view>
                                        <!---->
                                        <!---->
                                    </uni-view>
                                </uni-view>
                       
                       
                       
                       <style>
.tooltip {
  position: relative;
  display: inline-block;
}

.tooltip .tooltiptext {
  visibility: hidden;
  width: 140px;
  background-color: #555;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 5px;
  position: absolute;
  z-index: 1;
  bottom: 150%;
  left: 50%;
  margin-left: -75px;
  opacity: 0;
  transition: opacity 0.3s;
}

.tooltip .tooltiptext::after {
  content: "";
  position: absolute;
  top: 100%;
  left: 50%;
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: #555 transparent transparent transparent;
}

.tooltip:hover .tooltiptext {
  visibility: visible;
  opacity: 1;
}
</style>
	<div style="display:none;">
<input type="text" value="{{ route('home') }}?webcode={{ auth()->user()->refCode }}" id="myInput">
</div>



	
	
<script>
function myFunction() {
  var copyText = document.getElementById("myInput");
  copyText.select();
  copyText.setSelectionRange(0, 99999);
  navigator.clipboard.writeText(copyText.value);
  
  var tooltip = document.getElementById("myTooltip");
  tooltip.innerHTML = "Copied "  ;
}

function outFunc() {
  var tooltip = document.getElementById("myTooltip");
  tooltip.innerHTML = "Copy";
}
</script>

                       
                       
                       
                       
                       
                       
                                <button data-v-50bed489="" data-v-696bb61f=""  type="button"     id="myTooltip"      onclick="myFunction()" onmouseout="outFunc()"   class="u-button u-reset-button container-card-btn u-button--square u-button--normal" app-parameter="" send-message-title="" send-message-path="" lang="en" data-name="" session-from=""
                                    send-message-img="" style="color: white; border-width: 0px; background-image: linear-gradient(90deg, rgb(93, 153, 255) 0%, rgb(173, 118, 255) 100%);">
                                    <!---->
                                    <uni-text data-v-50bed489=""    class="u-button__text" style="font-size: 14px;"><span>Copy Link</span></uni-text>
                                </button>
                            </uni-view>
                        </uni-view>
                        <uni-view data-v-0fb526cb="" data-v-fa2b2b42="" data-v-696bb61f="" class="u-tabbar">
                            <uni-view data-v-0fb526cb="" class="u-tabbar__content u-border-top u-tabbar--fixed" style="z-index: 1;">
                                <uni-view data-v-0fb526cb="" class="u-tabbar__content__item-wrapper">
                                    <uni-view data-v-739c4cc8="" data-v-fa2b2b42="" class="u-tabbar-item">
                                        <uni-view data-v-739c4cc8="" class="u-tabbar-item__icon">
                                            <uni-image data-v-fa2b2b42="" class="tabbar-icon">
                                                <div style="background-image: url(&quot;/static/img/tabbar1/home_d@2x.png&quot;); background-position: 0% 0%; background-size: 100% 100%; background-repeat: no-repeat;"></div>
                                                <!----><img src="/static/img/tabbar1/home_d@2x.png" draggable="false"></uni-image>
                                            <!---->
                                        </uni-view>
                                        <uni-text data-v-739c4cc8="" class="u-tabbar-item__text" style="color: rgb(44, 48, 69);"><span>Home</span></uni-text>
                                    </uni-view>
                                    <uni-view data-v-739c4cc8="" data-v-fa2b2b42="" class="u-tabbar-item">
                                        <uni-view data-v-739c4cc8="" class="u-tabbar-item__icon">
                                            <uni-image data-v-fa2b2b42="" class="tabbar-icon">
                                                <div style="background-image: url(&quot;/static/img/tabbar1/mall_d@2x.png&quot;); background-position: 0% 0%; background-size: 100% 100%; background-repeat: no-repeat;"></div>
                                                <!----><img src="/static/img/tabbar1/mall_d@2x.png" draggable="false"></uni-image>
                                            <!---->
                                        </uni-view>
                                        <uni-text data-v-739c4cc8="" class="u-tabbar-item__text" style="color: rgb(44, 48, 69);"><span>Device</span></uni-text>
                                    </uni-view>
                                    <uni-view data-v-739c4cc8="" data-v-fa2b2b42="" class="u-tabbar-item">
                                        <uni-view data-v-739c4cc8="" class="u-tabbar-item__icon">
                                            <uni-image data-v-fa2b2b42="" class="tabbar-icon">
                                                <div style="background-image: url(&quot;/static/img/tabbar1/AI.png&quot;); background-position: 0% 0%; background-size: 100% 100%; background-repeat: no-repeat;"></div>
                                                <!----><img src="/static/img/tabbar1/AI.png" draggable="false"></uni-image>
                                            <!---->
                                        </uni-view>
                                        <uni-text data-v-739c4cc8="" class="u-tabbar-item__text" style="color: rgb(44, 48, 69);"><span>Tap</span></uni-text>
                                    </uni-view>
                                    <uni-view data-v-739c4cc8="" data-v-fa2b2b42="" class="u-tabbar-item">
                                        <uni-view data-v-739c4cc8="" class="u-tabbar-item__icon">
                                            <uni-image data-v-fa2b2b42="" class="tabbar-icon">
                                                <div style="background-image: url(&quot;/static/img/tabbar1/info_s@2x.png&quot;); background-position: 0% 0%; background-size: 100% 100%; background-repeat: no-repeat;"></div>
                                                <!----><img src="/static/img/tabbar1/info_s@2x.png" draggable="false"></uni-image>
                                            <!---->
                                        </uni-view>
                                        <uni-text data-v-739c4cc8="" class="u-tabbar-item__text" style="color: rgb(25, 117, 255);"><span>Share Option</span></uni-text>
                                    </uni-view>
                                    <uni-view data-v-739c4cc8="" data-v-fa2b2b42="" class="u-tabbar-item">
                                        <uni-view data-v-739c4cc8="" class="u-tabbar-item__icon">
                                            <uni-image data-v-fa2b2b42="" class="tabbar-icon">
                                                <div style="background-image: url(&quot;/static/img/tabbar1/profit_d@2x.png&quot;); background-position: 0% 0%; background-size: 100% 100%; background-repeat: no-repeat;"></div>
                                                <!----><img src="/static/img/tabbar1/profit_d@2x.png" draggable="false"></uni-image>
                                            <!---->
                                        </uni-view>
                                        <uni-text data-v-739c4cc8="" class="u-tabbar-item__text" style="color: rgb(44, 48, 69);"><span>Income</span></uni-text>
                                    </uni-view>
                                </uni-view>
                                <!---->
                            </uni-view>
                            <!---->
                        </uni-view>
                    </uni-view>
                </uni-page-body>
            </uni-page-wrapper>
        </uni-page>
        <uni-tabbar class="uni-tabbar-bottom" style="display: none;">
            <div class="uni-tabbar" style="background-color: rgb(255, 255, 255); backdrop-filter: none;">
                <div class="uni-tabbar-border" style="background-color: rgba(0, 0, 0, 0.33);"></div>
                <div class="uni-tabbar__item">
                    <!---->
                    <div class="uni-tabbar__bd" style="height: 50px;">
                        <!---->
                        <!---->
                        <!---->
                    </div>
                </div>
                <div class="uni-tabbar__item">
                    <!---->
                    <div class="uni-tabbar__bd" style="height: 50px;">
                        <!---->
                        <!---->
                        <!---->
                    </div>
                </div>
                <div class="uni-tabbar__item">
                    <!---->
                    <div class="uni-tabbar__bd" style="height: 50px;">
                        <!---->
                        <!---->
                        <!---->
                    </div>
                </div>
                <div class="uni-tabbar__item">
                    <!---->
                    <div class="uni-tabbar__bd" style="height: 50px;">
                        <!---->
                        <!---->
                        <!---->
                    </div>
                </div>
                <div class="uni-tabbar__item">
                    <!---->
                    <div class="uni-tabbar__bd" style="height: 50px;">
                        <!---->
                        <!---->
                        <!---->
                    </div>
                </div>
            </div>
            <div class="uni-placeholder" style="height: 50px;"></div>
        </uni-tabbar>
        <!---->
        <uni-actionsheet>
            <div class="uni-mask uni-actionsheet__mask" style="display: none;"></div>
            <div class="uni-actionsheet">
                <div class="uni-actionsheet__menu">
                    <!---->
                    <!---->
                    <div style="max-height: 260px; overflow: hidden;">
                        <div style="transform: translateY(0px) translateZ(0px);"></div>
                    </div>
                </div>
                <div class="uni-actionsheet__action">
                    <div class="uni-actionsheet__cell" style="color: rgb(0, 0, 0);"> Cancel </div>
                </div>
                <div></div>
            </div>
            <!---->
        </uni-actionsheet>
        <uni-modal style="display: none;">
            <div class="uni-mask"></div>
            <div class="uni-modal">
                <!---->
                <div class="uni-modal__bd"></div>
                <div class="uni-modal__ft">
                    <div class="uni-modal__btn uni-modal__btn_default" style="color: rgb(0, 0, 0);"> Cancel </div>
                    <div class="uni-modal__btn uni-modal__btn_primary" style="color: rgb(0, 122, 255);"> OK </div>
                </div>
            </div>
            <!---->
        </uni-modal>
        <!---->
        <!---->
    </uni-app>
    <script src="/static/js/chunk-vendors.124f9b16.js"></script>
    <script src="/static/js/index.20179e77.js"></script>
    <div style="position: absolute; left: 0px; top: 0px; width: 0px; height: 0px; z-index: -1; overflow: hidden; visibility: hidden;">
        <div style="position: absolute; width: 100px; height: 200px; box-sizing: border-box; overflow: hidden; padding-bottom: env(safe-area-inset-top);">
            <div style="transition: all; animation: auto ease 0s 1 normal none running none; width: 400px; height: 400px;"></div>
        </div>
        <div style="position: absolute; width: 100px; height: 200px; box-sizing: border-box; overflow: hidden; padding-bottom: env(safe-area-inset-top);">
            <div style="transition: all; animation: auto ease 0s 1 normal none running none; width: 250%; height: 250%;"></div>
        </div>
        <div style="position: absolute; width: 100px; height: 200px; box-sizing: border-box; overflow: hidden; padding-bottom: env(safe-area-inset-left);">
            <div style="transition: all; animation: auto ease 0s 1 normal none running none; width: 400px; height: 400px;"></div>
        </div>
        <div style="position: absolute; width: 100px; height: 200px; box-sizing: border-box; overflow: hidden; padding-bottom: env(safe-area-inset-left);">
            <div style="transition: all; animation: auto ease 0s 1 normal none running none; width: 250%; height: 250%;"></div>
        </div>
        <div style="position: absolute; width: 100px; height: 200px; box-sizing: border-box; overflow: hidden; padding-bottom: env(safe-area-inset-right);">
            <div style="transition: all; animation: auto ease 0s 1 normal none running none; width: 400px; height: 400px;"></div>
        </div>
        <div style="position: absolute; width: 100px; height: 200px; box-sizing: border-box; overflow: hidden; padding-bottom: env(safe-area-inset-right);">
            <div style="transition: all; animation: auto ease 0s 1 normal none running none; width: 250%; height: 250%;"></div>
        </div>
        <div style="position: absolute; width: 100px; height: 200px; box-sizing: border-box; overflow: hidden; padding-bottom: env(safe-area-inset-bottom);">
            <div style="transition: all; animation: auto ease 0s 1 normal none running none; width: 400px; height: 400px;"></div>
        </div>
        <div style="position: absolute; width: 100px; height: 200px; box-sizing: border-box; overflow: hidden; padding-bottom: env(safe-area-inset-bottom);">
            <div style="transition: all; animation: auto ease 0s 1 normal none running none; width: 250%; height: 250%;"></div>
        </div>
    </div>
</body>

</html>
@endsection