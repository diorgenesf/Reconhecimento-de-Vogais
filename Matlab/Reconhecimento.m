clear all
clc
Treinamento = csvread('Letras.csv');
P = Treinamento(1:5,1:15)';
T = Treinamento(1:5,16:18)';
%T = [0 1; 1 0; 0 0; 0 0; 1 0; 1 1; 1 1; 0 1; 0 0; 0 0; 1 0; 0 0; 1 0; 0 1; 1 0; 0 0; 1 1; 1 0; 0 0; 0 1; 0 1]'
net = newp([0 1; 0 1; 0 1; 0 1; 0 1; 0 1; 0 1; 0 1; 0 1; 0 1; 0 1; 0 1; 0 1; 0 1; 0 1], 3);
%net.IW{1,1} = [0 0; 0  0; 0 0; 0 0; 0 0; 0 0; 0 0]';
pesoInicial = net.IW{1,1};
%net.trainParam.epochs = 1000;
%net.trainParam.goal = 0.5;
net = train(net, P, T);
pesoFinal = net.IW{1,1};

Teste = csvread('np.csv');
NP = Teste';
y = sim(net,NP);

result = strcat(num2str(y(1)),num2str(y(2)),num2str(y(3)));
disp('A letra inserida foi:')
switch result
    case '000'
        disp('#########')
        disp('###   ###')
        disp('#########')
        disp('###   ###')
        disp('###   ###')
    case '001'
        disp('#########')
        disp('###      ')
        disp('#########')
        disp('###      ')
        disp('#########')
    case '010'
        disp('   ###   ')
        disp('   ###   ')
        disp('   ###   ')
        disp('   ###   ')
        disp('   ###   ')
    case '011'
        disp('#########')
        disp('###   ###')
        disp('###   ###')
        disp('###   ###')
        disp('#########')
    case '100'
        disp('###   ###')
        disp('###   ###')
        disp('###   ###')
        disp('###   ###')
        disp('#########')
    otherwise
        disp('Entrada não identificada')
end

